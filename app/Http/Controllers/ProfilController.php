<?php

namespace App\Http\Controllers;

use App\Mail\ModifierPasswordMail;
use App\Models\Entreprise;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProfilController extends Controller
{
    //

    public function profilUser(){
        
        $user= auth()->user()->id;
        //dd($user);
        $entreprise= Entreprise::where('user_id', $user)->first();

        //dd($user, $entreprise);

        return view('Entreprises/profil',compact('entreprise'));
    }

    public function updateProfil(Entreprise $entreprise, Request $request){

        //dd($request->all());
        try {
            // Mise à jour des données de l'entreprise
            $entreprise->update([
                'entreprise' => $request->entreprise,
                'representant' => $request->representant,
                'ville' => $request->ville,
                'quatier' => $request->quatier,
                'telephone' => $request->telephone,
                'description' => $request->description,
            ]);
        
            // Mise à jour des données de l'utilisateur
            $user = $entreprise->user;
            $user->name = $request->entreprise;
            $user->email = $request->email;
            $user->save();
        
            return back()->with('success', 'Votre profil a été modifié avec succès');
        } catch (Exception $e) {
            dd($e);
        }
        


    }


    public function update(Request $request){
        //dd($request);
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ], [
            'old_password.required' => 'L\'ancien mot de passe est requis.',
            'password.required' => 'Le nouveau mot de passe est requis.',
            'password.min' => 'Le nouveau mot de passe doit comporter au moins 6 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'password_confirmation.required' => 'La confirmation du mot de passe est requise.'
        ]);
        
        try{
            $user = Auth::user();
        
            // Vérifier si le mot de passe actuel est correct
            if (!Hash::check($request->old_password, $user->password)) {
                return back()->with('danger','Le mot de passe actuel est incorrect.');
            }
        
            // Vérifier si le nouveau mot de passe est identique à l'ancien
            if (Hash::check($request->password, $user->password)) {
                return back()->with('danger','Le nouveau mot de passe doit être différent du mot de passe actuel.');
            }

            // Vérifier si le mot de passe et la confirmation sont identiques
            if ($request->password !== $request->password_confirmation) {
                return back()->with('danger','Le mot de passe de confirmation ne correspond pas au nouveau mot de passe.');
            }
        
            // Mettre à jour le mot de passe
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            Mail::to($user->email)->send(new ModifierPasswordMail($user));

            // Déconnecter l'utilisateur
            Auth::logout();

            // Rediriger vers la page de connexion avec un message de succès
            return redirect()->route('login')->with('success', 'Votre mot de passe a été modifié avec succès. Veuillez vous reconnecter avec le nouveau mot de passe.');

        
            return redirect()->route('login')->with('error','Le mot de passe modifié avec succès. Connectez-vous avec le nouveau mot de passe');
        }catch(Exception $e){
            dd($e);
        }
    }

    
    


}
