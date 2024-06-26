<?php

namespace App\Http\Controllers;

use App\Mail\ContacteProprietaireAppartementMail;
use App\Models\Appartement;
use App\Models\Entreprise;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppartementController extends Controller
{
    //
    public function index(){

        $appartements = Appartement::latest()->paginate(3);

        //dd($bureaux);


        return view('appartements.index', compact('appartements'));
    }

    //function qui appel le formulaire de création
    public function appartement(){
        //dd(1);
        return view('appartements.create');
    }

     //l'enregistremen des appartements
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
                 'canal' => $request->canal,
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
 
     //Détail appartement
    public function appartementDetail($appartement){

         //dd($vehicule);
         $appartements = Appartement::where('id', $appartement)->first();

         // Sélectionner aléatoirement quatre marques distinctes
          $lieux = Appartement::distinct('lieux')
          ->inRandomOrder()
          ->limit(5)
          ->pluck('lieux');
  
          // Récupérer aléatoirement un véhicule pour chaque marque sélectionnée
          $appartementSimilaires = collect([]);
          foreach ($lieux as $marque) {
          $appartement = Appartement::where('lieux', $marque)
              ->inRandomOrder()
              ->first();
          $appartementSimilaires->push($appartement);
          }
  
          return view('appartements.detail',compact('appartements','appartementSimilaires'));
    }


    public function appartementEntreprise(){


        $user= auth()->user()->id;
        $entreprises= Entreprise::where('user_id', $user)->first();
        $entreprise= $entreprises->id;
        $appartements= Appartement::where('entreprise_id', $entreprise)->latest()->paginate(3);

        return view('Enreprises.annonce', compact('appartements'));
    }

    public function searchAppartement(Request $request)
    {
        $query = Appartement::query();

        if ($request->lieux) {
            $query->where('lieux', 'like', '%' . $request->lieux . '%');
        }

        if ($request->prix_min) {
            $query->where('prix', '>=', $request->prix_min);
        }

        if ($request->prix_max) {
            $query->where('prix', '<=', $request->prix_max);
        }

        $appartements = $query->latest()->paginate(3);

        return view('appartements.index', compact('appartements'));
        // return view('au', compact('results'));
    }
    

    public function mailProprietaire(Request $request){

        $request->validate([
            'nom'=>'required',
            'telephone'=>'required',
            'message'=>'required',
            'email'=>'required'

        ], [
            'nom.required'=>' Votre nom est requis',
            'message.required'=>'Le message est requis',
            'telephone.required'=>'Le numéro de téléphone est requis',
            'email.required'=>'Votre email est requis',
            
        ]);
        $entreprise= $request->entreprise;
        $nom= $request->nom;
        $telephone = $request->telephone;
        $message = $request->message;
        $email= $request->email;

        Mail::to($entreprise)->send(new ContacteProprietaireAppartementMail($nom, $telephone, $email, $message));

        return back()->with('success', 'Votre message a bien été transmis .');
    }


    public function update(Appartement $appartement){

        //dd($appartement);

        return view('appartements.update', compact('appartement'));
    }

    public function appartementUpdate(Request $request, $appartement){

        $appartements = Appartement::findOrFail($appartement);

        
        try {
                
            $appartements->update([
                'nombreSalon' => $request->nombreSalon,
                'nombreChambre' => $request->nombreChambre,
                'cuisine' => $request->cuisine,
                'entretien' => $request->entretien,
                'climaVenilo' => $request->climaVenilo,
                'lieux' => $request->lieux,
                'packing' => $request->packing,
                'terasse' => $request->terasse,
                'canal' => $request->canal,
                'meuble' => $request->meuble,
                'securite' => $request->securite,
                'prix' => $request->prix,
                'negociable' => $request->negociable,
                'description' => $request->description,
                'ptiDejeuner' => $request->ptiDejeuner,
                'wifi' => $request->wifi,
            ]);

            // Mettre à jour les images du véhicule
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/vehicules'), $imageName);
                $images[] = 'images/vehicules/' . $imageName;
            }
            $appartements->images = implode('|', $images);
            $appartements->save();
        }

            // Redirection avec un message de succès
             return redirect()->route('entreprise.annonce')->with('success', 'Votre annonce a été modifiée avec succès.');
    
        } catch (Exception $e) {
            dd($e);

            // Gérer les erreurs
            return redirect()->back()->with('error', 'Une erreur est survenue lors du dépôt de votre annonce.');
        }
        dd($appartement, $request);

    }

}
