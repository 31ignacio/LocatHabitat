<?php

namespace App\Http\Controllers;

use App\Models\Bureau;
use App\Models\Entreprise;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BureauxController extends Controller
{
    //
    public function index(){

        $bureaux = Bureau::paginate(4);

        //dd($bureaux);


        return view('bureaux.index', compact('bureaux'));
    }
    //function qui appel le formulaire de création
    public function bureaux(){
        //dd(1);
        return view('bureaux.create');
    }

    //l'enregistremen du vehicules
    public function burauxStore(Request $request){
       // dd($request);

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
            $bureau = Bureau::create([
                'nombreSalle' => $request->nombreSalle,
                'climaVenilo' => $request->climaVenilo,
                'lieux' => $request->lieux,
                'toilette' => $request->toilette,
                'bureauEquiper' => $request->bureauEquiper,
                'salleReunion' => $request->salleReunion,
                'emplacement' => $request->emplacement,
                'prix' => $request->prix,
                'description' => $request->description,
                'eau' => $request->eau,
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

    public function bureauDetail($bureau){
        //dd($bureau);

         //dd($vehicule);
         $bureaux = Bureau::where('id', $bureau)->first();

         // Sélectionner aléatoirement quatre marques distinctes
          $lieux = Bureau::distinct('lieux')
          ->inRandomOrder()
          ->limit(5)
          ->pluck('lieux');
  
          // Récupérer aléatoirement un véhicule pour chaque marque sélectionnée
          $bureauxSimilaires = collect([]);
          foreach ($lieux as $marque) {
          $bureau = Bureau::where('lieux', $marque)
              ->inRandomOrder()
              ->first();
          $bureauxSimilaires->push($bureau);
          }
  
          return view('bureaux.detail',compact('bureaux','bureauxSimilaires'));
    }

    public function bureauEntreprise(){
 
        $user= auth()->user()->id;
        $entreprises= Entreprise::where('user_id', $user)->first();
        $entreprise= $entreprises->id;
        $bureaux= Bureau::where('entreprise_id', $entreprise)->get();

        return view('bureaux.annoncePersonnelle', compact('bureaux'));

    }

    public function bureauUpdate(Request $request, $id){

        $bureau = Bureau::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'lieux' => 'required|string|max:255',
            'wifi' => 'required',
            'eau' => 'required',
            'toilette' => 'required',
            'prix' => 'required',
            'climaVenilo' => 'required',
            'nombreSalle' => 'required',
            'bureauEquiper' => 'required',
            'salleReunion' => 'required',
            'emplacement' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         // Mettre à jour les informations du véhicule
         $bureau->update([
            'lieux' => $validatedData['lieux'],
            'wifi' => $validatedData['wifi'],
            'eau' => $validatedData['eau'],
            'toilette' => $validatedData['toilette'],
            'prix' => $validatedData['prix'],
            'salleReunion' => $validatedData['salleReunion'],
            'emplacement' => $validatedData['emplacement'],
            'salleReunion' => $validatedData['salleReunion'],
            'bureauEquiper' => $validatedData['bureauEquiper'],
            'climaVenilo' => $validatedData['climaVenilo'],

        ]);

        // Mettre à jour les images du véhicule
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/vehicules'), $imageName);
                $images[] = 'images/vehicules/' . $imageName;
            }
            $bureau->images = implode('|', $images);
            $bureau->save();
        }
        return redirect()->back()->with('success', 'Les informations du bureau ont été mises à jour avec succès.');


    }
    

}
