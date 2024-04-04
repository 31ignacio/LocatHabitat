<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Exception;
use Illuminate\Http\Request;

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
            $entreprise->id = $request->id;
            $entreprise->entreprise = $request->entreprise;
            $entreprise->representant = $request->representant;
            $entreprise->ville = $request->ville;
            $entreprise->quatier = $request->quatier;
            $entreprise->telephone = $request->telephone;
            $entreprise->description = $request->description;

            //dd($hotel);
            $entreprise->update();
            //dd($hotel);
            return back()->with('success', 'Votre profil a été modifié avec succès');

        } catch (Exception $e) {
            dd($e);
        }


    }

}
