<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    //

    public function index(){

        $entreprises= Entreprise::latest()->paginate(5);
        //dd($entreprises);

        return view('Entreprises.index',compact('entreprises'));
    }

    public function show($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        //dd($entreprise);
        return view('Entreprises.show', compact('entreprise'));
    }

    public function activer($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        $user = $entreprise->user; // Récupérer l'utilisateur associé à l'entreprise
    
        // Mettre à jour la propriété estActive de l'utilisateur
        $user->estActive = 1;
        $user->save(); // Enregistrer les modifications dans la base de données
    
        
        return redirect()->back()->with('success', 'Entreprise activée avec succès.');
    }

    public function desactiver($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        $user = $entreprise->user; // Récupérer l'utilisateur associé à l'entreprise
    
        // Mettre à jour la propriété estActive de l'utilisateur
        $user->estActive = 0;
        $user->save();

        return redirect()->back()->with('success', 'Entreprise désactivée avec succès.');
    }

}
