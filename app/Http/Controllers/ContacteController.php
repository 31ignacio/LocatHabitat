<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;

class ContacteController extends Controller
{
    //

    public function contacte(){

        return view("contacte.create");
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
