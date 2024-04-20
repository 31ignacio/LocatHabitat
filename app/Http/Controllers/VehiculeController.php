<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Entreprise;
use App\Models\Vehicule;
use Exception;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    //
    //function qui appel le formulaire de création
    public function vehicule(){


        return view('vehicules.create');
    }

    //l'enregistremen du vehicules
    public function vehiculeStore(Request $request){

        // Récupérer l'ID de l'utilisateur authentifié
        $user_id = auth()->user()->id;
    
        // Trouver l'entreprise associée à l'utilisateur
        $entreprise = Entreprise::where('user_id', $user_id)->first();
    
        // Valider les données du formulaire
        $request->validate([
            'marque' => 'required',
            'prix' => 'required',
        ], [
            'marque.required' => 'La marque du véhicule est requise',
            'prix.required' => 'Le prix du véhicule est requis',
        ]);
    
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
            $vehicule = Vehicule::create([
                'marque' => $request->marque,
                'prix' => $request->prix,
                'caburation' => $request->caburation,
                'chauffeur' => $request->chauffeur,

                'climatiseur' => $request->climatiseur,
                'entreprise_id' => $entreprise->id,
                'images' => implode('|', $images), // Convertir le tableau d'images en une chaîne séparée par des |
            ]);
           // dd($vehicule);
    
            // Redirection avec un message de succès
            return redirect()->back()->with('success', 'Votre annonce a été déposée avec succès.');
    
        } catch (Exception $e) {
            dd($e);
            // Gérer les erreurs
            return redirect()->back()->with('error', 'Une erreur est survenue lors du dépôt de votre annonce.');
        }
    }
    

    public function EntrepriseAnnonce(){

        $user= auth()->user()->id;
        $entreprises= Entreprise::where('user_id', $user)->first();
        $entreprise= $entreprises->id;
        $appartements= Appartement::where('entreprise_id', $entreprise)->latest()->paginate(3);

        return view('Entreprises.annonce',compact('appartements'));
    }

    public function VehiculeEntreprise(){
 
        $user= auth()->user()->id;
        $entreprises= Entreprise::where('user_id', $user)->first();
        $entreprise= $entreprises->id;
        $vehicules= Vehicule::where('entreprise_id', $entreprise)->latest()->paginate(3);



        return view('vehicules.annoncePersonnelle', compact('vehicules'));
    }

    public function vehiculeDetail($vehicule){

        //dd($vehicule);
        $vehicules = Vehicule::where('id', $vehicule)->first();

       // Sélectionner aléatoirement quatre marques distinctes
        $marques = Vehicule::distinct('marque')
        ->inRandomOrder()
        ->limit(5)
        ->pluck('marque');

        // Récupérer aléatoirement un véhicule pour chaque marque sélectionnée
        $vehiculesSimilaires = collect([]);
        foreach ($marques as $marque) {
        $vehicule = Vehicule::where('marque', $marque)
            ->inRandomOrder()
            ->first();
        $vehiculesSimilaires->push($vehicule);
        }

        return view('vehicules.detail',compact('vehicules','vehiculesSimilaires'));
    }

    public function vehiculeUpdate(Request $request, $id){

        $vehicule = Vehicule::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'marque' => 'required|string|max:255',
            'climatiseur' => 'required|string|max:255',
            'caburation' => 'required|string|max:255',
            'chauffeur' => 'required|string|max:255',
            'prix' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mettre à jour les informations du véhicule
        $vehicule->update([
            'marque' => $validatedData['marque'],
            'climatiseur' => $validatedData['climatiseur'],
            'caburation' => $validatedData['caburation'],
            'chauffeur' => $validatedData['chauffeur'],
            'prix' => $validatedData['prix'],

        ]);

        // Mettre à jour les images du véhicule
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/vehicules'), $imageName);
                $images[] = 'images/vehicules/' . $imageName;
            }
            $vehicule->images = implode('|', $images);
            $vehicule->save();
        }

        

        return redirect()->back()->with('success', 'Les informations du véhicule ont été mises à jour avec succès.');



    }

    public function searchVehicule(Request $request)
    {
        $query = Vehicule::query();

        if ($request->marque) {
            $query->where('marque', 'like', '%' . $request->marque . '%');
        }

        if ($request->prix_min) {
            $query->where('prix', '>=', $request->prix_min);
        }

        if ($request->prix_max) {
            $query->where('prix', '<=', $request->prix_max);
        }

        $vehicules = $query->latest()->paginate(3);

        return view('auth.users.index', compact('vehicules'));
        // return view('au', compact('results'));
    }

}
