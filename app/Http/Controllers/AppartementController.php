<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Entreprise;
use Exception;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    //

    //function qui appel le formulaire de création
    public function appartement(){
        //dd(1);
        return view('appartements.create');
    }

     //l'enregistremen du vehicules
     public function appartementStore(Request $request){
        //dd($request);
 
         // Récupérer l'ID de l'utilisateur authentifié
         $user_id = auth()->user()->id;
     
         // Trouver l'entreprise associée à l'utilisateur
         $entreprise = Entreprise::where('user_id', $user_id)->first();
     
         // Valider les données du formulaire
 
         try {
             // Créer un tableau vide pour stocker les chemins des images
             $images = [];
     
             // Vérifier si des fichiers d'images sont présents dans la requête
             if ($files = $request->file('images')) {
                 foreach ($files as $file) {
                     // Générer un nom unique pour chaque image
                     $image_name = md5(uniqid() . microtime());
                     // Obtenir l'extension de fichier
                     $extension = $file->getClientOriginalExtension();
                     // Construire le chemin de destination
                     $image_full_name = $image_name . '.' . $extension;
                     // Déplacer le fichier téléchargé vers le dossier de destination
                     $file->move(public_path('multiple_image/'), $image_full_name);
                     // Ajouter le chemin de l'image au tableau
                     $images[] = 'multiple_image/' . $image_full_name;
                 }
             }
     
             // Créer un nouveau véhicule
             $appartement = Appartement::create([
                 'nombreSalon' => $request->nombreSalon,
                 'nombreChambre' => $request->nombreChambre,
                 'cuisine' => $request->cuisine,
                 'entretien' => $request->entretien,
                 'climaVenilo' => $request->climaVenilo,
                 'lieux' => $request->lieux,
                 'packing' => $request->packing,
                 'terasse' => $request->terasse,
                 'canal+' => $request->canal,
                 'meuble' => $request->meuble,
                 'securite' => $request->securite,
                 'prix' => $request->prix,
                 'negociable' => $request->negociable,
                 'description' => $request->description,
                 'ptiDejeuner' => $request->ptiDejeuner,
                 'wifi' => $request->wifi,
                 'entreprise_id' => $entreprise->id,
                 'images' => implode('|', $images), // Convertir le tableau d'images en une chaîne séparée par des |
             ]);
             return Response(200);
 
             // Redirection avec un message de succès
             // return redirect()->back()->with('success', 'Votre annonce a été déposée avec succès.');
     
         } catch (Exception $e) {
             dd($e);
 
             // Gérer les erreurs
             return redirect()->back()->with('error', 'Une erreur est survenue lors du dépôt de votre annonce.');
         }
     }
 

}
