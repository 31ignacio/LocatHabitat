<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitDefineAccessRequest;
use App\Mail\ApresInscriptionMail;
use App\Models\Entreprise;
use App\Models\ResetCodePassword;
use App\Models\User;
use App\Models\Vehicule;
use App\Notifications\InscriptionEntrepriseNotification;
use App\Notifications\PasswordForgetEntrepriseNotification;
use Exception;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class UserAuthController extends Controller
{
    //

    public function index(){

        $vehicules = Vehicule::latest()->paginate(3);

        //dd($vehicules);


        return view('auth.users.index', compact('vehicules'));
    }
    public function login(){

        return view('auth.users.login');
    }


    public function registerEntreprise(){

        return view('auth.users.registerEntreprise');
    }

    public function handleEntrepriseRegister(Request $request){

        $request->validate([
            'entreprise'=>'required',
            'representant'=>'required',
            'ville'=>'required',
            'quatier'=>'required',
            'telephone'=>'required',
            'email'=>'required|unique:users,email'

        ], [
            'entreprise.required'=>'Le nom de votre entreprise est requis',
            'representant.required'=>'Le nom de votre représentant est requis',
            'ville.required'=>'Le nom de votre ville est requis',
            'quatier.required'=>'Le nom de votre quatier est requis',
            'telephone.required'=>'Le numéro de téléphone est requis',
            'email.required'=>'Votre email est requis',
            'email.unique'=>'Cette adresse mail est déjà prise', 
            
        ]);


        try {
            //code...
            $user = User::create([
                'name' => $request->entreprise,
                'email' => $request->email,
                'telephone' => $request->telephone, // Je suppose que c'est $request->telephone
                'role' => "ENTREPRISE",
                'estActive'=>0,
            ]);
            
            Entreprise::create([
                'entreprise' => $request->entreprise,
                'representant' => $request->representant,
                'ville' => $request->ville,
                'quatier' => $request->quatier,
                'description' => $request->description,
                'telephone' => $request->telephone, // Je suppose que c'est $request->telephone

                'user_id' => $user->id, // Affecter l'ID de l'utilisateur nouvellement créé
            ]);
             
            //Envoyer un mail pour que l'entreprise puisse confirmer son compte

            //Envoyeer un code par mail pour verifier
            //1- s'assurer que le user a été bien enregistré
            if($user){
                try {
                    // Votre code...
                
                    // Supprimer les anciens codes de réinitialisation s'il y en a
                    ResetCodePassword::where('email', $request->email)->delete();
                
                    // Générer un nouveau code
                    $code = rand(1000, 9000);
                
                    // Enregistrer le nouveau code dans la base de données
                    $data = [
                        'code' => $code,
                        'email' => $request->email
                    ];
                    ResetCodePassword::create($data);
                
                    // Envoyer la notification par e-mail à l'utilisateur
                    Notification::route('mail', $request->email)->notify(new InscriptionEntrepriseNotification($code, $request->email,$request->entreprise));
                
                    return redirect()->back()->with('success', 'Votre compte a été créé. Veuillez consulter votre boîte e-mail pour activer votre compte.');
                
                } catch (Exception $e) {
                    dd($e);
                    // Gérer l'erreur
                    throw new Exception('Une erreur est survenue lors de l\'envoi du mail');
                }
                
            }
            
        } catch (Exception $e) {
            //throw $th;
            dd($e);
        }
    }

    public function registerUser(){

        return view('auth.users.registerUser');
    }

    public function handleUserLogin(Request $request){

        $request->validate([
            'email'=>'required|exists:users,email',
            'password'=>'required|min:6'
        ], [
            'email.required'=>'Votre email est requis',
            'email.exists'=>'Cette adresse mail n\'est pas reconnu', 
            'password.required'=>'Le mot de passe est requis',
            'password.min'=> 'Le mot de passe est incorrect'
        ]);

        try {
            // Vérifier les informations d'identification de l'utilisateur
            $credentials = $request->only('email', 'password');
            
            // Rechercher l'utilisateur par son email
            $user = User::where('email', $request->email)->first();
            
            // Vérifier si l'utilisateur existe
            if (!$user) {
                // Informer l'utilisateur que les informations de connexion sont incorrectes
                return redirect()->back()->with('error', 'Informations de connexion incorrectes.');
            }
        
            // Vérifier si le compte de l'utilisateur est actif
            if (!$user->estActive) {
                // Informer l'utilisateur que son compte est désactivé
                return redirect()->back()->with('error', 'Votre compte est désactivé. Veuillez contacter l\'administrateur.');
            }
        
            // Authentifier l'utilisateur
            if (auth()->attempt($credentials)) {
                // Rediriger vers la page d'accueil
                return redirect('/');
            } else {
                // Informer l'utilisateur que les informations de connexion sont incorrectes
                return redirect()->back()->with('error', 'Informations de connexion incorrectes.');
            }
        } catch (Exception $e) {
            // Gérer les exceptions
        }
        
        
    }

    public function handleLogout(){

        Auth::logout();
        return redirect('/');
    }

    public function defineAccess($email){

        //1- S'assurer que l'email existe vraiment
        $checkUserExist= User::where('email', $email)->first();
        //2- S'il existe
        if($checkUserExist){
            return view('auth.users.validate-account', compact('email'));
        }else{
        //Si le mail n'existe pas
            return redirect()->route('home');
        }


    }

    public function submitDefineAccess(SubmitDefineAccessRequest $request){

        try {
            //code...
            $user= User::where('email', $request->email)->first();
            if($user){
                $user->password= Hash::make($request->password);
                $user->email_verified_at= Carbon::now();
                $user->estActive=1;
                $user->update(); 

                //supprimer le code de la table apres confirmation de son compte
                if($user){
                    ResetCodePassword::where('email', $user->email)->delete();
                }
                Mail::to($user->email)->send(new ApresInscriptionMail($user));

                return redirect()->route('handleUserLogin')->with('success', 'Vos accès on été correctement défini');
            }else{
                //404
            }
        } catch (Exception $e) {
            dd($e);
        }
    }


    public function showLinkRequestForm(){


        return view('auth.users.passwordForget');
    }


    public function changePassword(Request $request){


        $request->validate([
            'email'=>'required'

        ], [
            'email.required'=>'Votre email est requis',
            
        ]);

        $email = User::where('email', $request->email)->first();

        if($email){
            try {
                // Votre code...
            
                // Supprimer les anciens codes de réinitialisation s'il y en a
                ResetCodePassword::where('email', $request->email)->delete();
            
                // Générer un nouveau code
                $code = rand(1000, 9000);
            
                // Enregistrer le nouveau code dans la base de données
                $data = [
                    'code' => $code,
                    'email' => $request->email
                ];
                ResetCodePassword::create($data);
            
                // Envoyer la notification par e-mail à l'utilisateur
                Notification::route('mail', $request->email)->notify(new PasswordForgetEntrepriseNotification($code, $request->email,$request->entreprise));
            
                return redirect()->back()->with('success', 'Un e-mail a été envoyé à votre adresse pour réinitialiser votre mot de passe. Veuillez vérifier votre boîte de réception.');
            
            } catch (Exception $e) {
                dd($e);
                // Gérer l'erreur
                throw new Exception('Une erreur est survenue lors de l\'envoi du mail');
            }
        }else{
        return back()->with('error','L\'adresse email n\'est pas valide');
        }
        
    }

    public function defineAccessMail($email,$code){

        //1- S'assurer que l'email existe vraiment
        $checkUserExist= User::where('email', $email)->first();
        //2- S'il existe
        if($checkUserExist){
            return view('auth.users.validate-mail', compact('email','code'));
        }else{
        //Si le mail n'existe pas
            return redirect()->route('home');
        }


    }


    public function submitDefineAccessMail(Request  $request){

        $request->validate([
            'password' => 'required|min:6|same:confirme_password',
            'confirme_password'=>'required|same:password',
            'code'=>'required|exists:reset_code_passwords,code',

        ], [
            'code.required'=>'Le code est requis.',
            'code.exists'=>'Ce mail est expiré,vueillez consulter votre boite mail.',
            'password.required'=>'Le mot de passe es requis.',
            'password.min'=> 'Le mot de passe doit être supérieur à cinq (05) caractères.',
            'confirme_password'=> 'Confirmer mot de passe.',
            'password.same'=>'Les mots de passe ne correspondent pas.',
            'confirme_password.same'=>'Les mots de passe ne correspondent pas.',
            
        ]);


        try {
            //code...
            $user= User::where('email', $request->email)->first();
            if($user){
                $user->password= Hash::make($request->password);
                $user->email_verified_at= Carbon::now();
                $user->update(); 

                //supprimer le code de la table apres confirmation de son compte
                if($user){
                    ResetCodePassword::where('email', $user->email)->delete();
                }
                Mail::to($user->email)->send(new ApresInscriptionMail($user));

                return redirect()->route('handleUserLogin')->with('success', 'Vos accès on été correctement défini');
            }else{
                //404
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

}
