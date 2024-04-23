<?php

namespace App\Http\Controllers;

use App\Mail\ContacteMail;
use App\Models\Appartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContacteController extends Controller
{
    //

    public function contacte(){

        return view("contacte.create");
    }

    public function store(Request $request){

        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'sujet'=>'required',
            'message'=>'required',
            'email'=>'required'

        ], [
            'nom.required'=>'Votre nom est requis',
            'prenom.required'=>'Votre prénom est requis',
            'sujet.required'=>'Le sujet est requis',
            'message.required'=>'Le message est requis',
            'email.required'=>'Votre email est requis',
            
        ]);

            $nous = "ariexpertize@gmail.com";

            $nom = $request->nom;
            $prenom = $request->prenom;
            $sujet = $request->sujet;
            $message = $request->message;
            $email = $request->email;

            Mail::to($nous)->send(new ContacteMail($nom, $prenom, $email, $sujet, $message));

                return back()->with('success', 'Votre message a bien été transmis .');
    }

    public function faq(){

        return view("faq.create");
    }

    public function tarification(){

        return view('tarification.create');
    }

    public function footer(){

        // Sélectionner aléatoirement quatre marques distinctes
        $lieux = Appartement::distinct('lieux')
        ->inRandomOrder()
        ->limit(3)
        ->pluck('lieux');

        // Récupérer aléatoirement un véhicule pour chaque marque sélectionnée
        $appartementSimilaires = collect([]);
        foreach ($lieux as $marque) {
        $appartement = Appartement::where('lieux', $marque)
            ->inRandomOrder()
            ->first();
        $appartementSimilaires->push($appartement);
        }
        return view('layouts.master')->with('appartementSimilaires', $appartementSimilaires);
  }
    
}
