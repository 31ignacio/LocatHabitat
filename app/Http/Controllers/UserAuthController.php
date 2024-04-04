<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\User;
use App\Models\Vehicule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    //

    public function index(){

        $vehicules = Vehicule::paginate(4);

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
            'email'=>'required|unique:users,email',
            'password'=>'required|min:6'
        ], [
            'entreprise.required'=>'Le nom de votre entreprise est requis',
            'representant.required'=>'Le nom de votre représentant est requis',
            'ville.required'=>'Le nom de votre ville est requis',
            'quatier.required'=>'Le nom de votre quatier est requis',
            'telephone.required'=>'Le numéro de téléphone est requis',

            'email.required'=>'Votre email est requis',
            'email.unique'=>'Cette adresse mail est déjà prise', 
            'password.required'=>'Le mot de passe est requis',
            'password.min'=> 'Le mot de passe doit avoir au moins 6 caractères'
        ]);


        try {
            //code...
            $user = User::create([
                'name' => $request->entreprise,
                'email' => $request->email,
                'telephone' => $request->telephone, // Je suppose que c'est $request->telephone
                'role' => "ENTREPRISE",
                'password' => Hash::make($request->password),
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
             
           
            return redirect()->back()->with('success','Votre compte a été crée. Connecter vous');
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
            //code...
            if(auth()->attempt($request->only('email','password'))){
                //Rediriger vers la page d'accueil

                return redirect('/');
            }else{
                return redirect()->back()->with('error','Information de connexion non reconnu');
            }

        } catch (Exception $e) {
            //throw $th;
        }

    }

    public function handleLogout(){

        Auth::logout();
        return redirect('/');
    }

}
