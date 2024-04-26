<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\BureauxController;
use App\Http\Controllers\ContacteController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', [UserAuthController::class, 'index'])->name('home');
Route::get('/validate-account/{email}', [UserAuthController::class, 'defineAccess']);
Route::post('/validate-account/{email}', [UserAuthController::class, 'submitDefineAccess'])->name('submitDefineAccess');


Route::get('forgot-password', [UserAuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [UserAuthController::class, 'changePassword'])->name('password.email');
Route::get('/validate-mail/{email}/{code}', [UserAuthController::class, 'defineAccessMail'])->name('change.mail');
Route::post('/validate-mail/{email}', [UserAuthController::class, 'submitDefineAccessMail'])->name('submitDefineAccessMail');

//Déconnexion
    Route::get('/logout', [UserAuthController::class, 'handleLogout'])->name('user.logout');

//end

// les route register et login doit etre appeler lorsque l'utilisateur n'est pas connecté

    Route::middleware(['guest'])->group(function () {

        // Inscription entreprise
        Route::get('/register', [UserAuthController::class, 'registerEntreprise'])->name('user.registerEntreprise');
        Route::post('register/Entreprise', [UserAuthController::class, 'handleEntrepriseRegister'])->name('handleEntrepriseRegister');

        //Inscription utilisaeur
        // Route::get('/registe', [UserAuthController::class, 'registerUser'])->name('user.registerUser');
        // Route::post('register/User', [UserAuthController::class, 'handleUserUser'])->name('handleUserRegister');

        //Connexion

        Route::get('/login', [UserAuthController::class, 'login'])->name('login');
        Route::post('/login', [UserAuthController::class, 'handleUserLogin'])->name('handleUserLogin'); 



    });
// end
Route::post('/newsletter', [NewsletterController::class, 'newsletter'])->name('newsletter');


//contacte
 Route::get('/contacte', [ContacteController::class, 'contacte'])->name('contacte.create');
 Route::post('/contacte/admin', [ContacteController::class, 'store'])->name('contacte.store');


//end

//footer
  Route::get('/footer', [ContacteController::class, 'footer'])->name('footer');
//end

//FAQ
    Route::get('/faq', [ContacteController::class, 'faq'])->name('faq.create');

//end

//Tarification
    Route::get('/tarification', [ContacteController::class, 'tarification'])->name('tarification.create');

//end

//vehicules
   
    //les annonces d'une entreprise (par defaut la liste des appartements)
    Route::get('/EntrepriseAnnonce', [VehiculeController::class, 'EntrepriseAnnonce'])->name('entreprise.annonce');

    Route::get('/search/Vehicule', [VehiculeController::class, 'searchVehicule'])->name('search.vehicule');

    //detail d'un vehicule
    Route::get('/{vehicule}', [VehiculeController::class, 'VehiculeDetail'])->name('vehicule.detail');

    
//end

Route::middleware(['auth'])->group(function () {

    //Bureaux création
    Route::get('bureaux/creer', [BureauxController::class, 'bureaux'])->name('bureaux');
    Route::post('/bureauxStore', [BureauxController::class, 'burauxStore'])->name('bureaux.store');

    //Modifier un bureau
    Route::post('/bureaux/{id}/update', [BureauxController::class, 'bureauUpdate'])->name('bureaux.update');
    Route::get('/search/bureaux', [BureauxController::class, 'searchBureaux'])->name('search.bureaux');

    //Recuperer les bureaux d'une entreprise
    Route::get('bureau/Entreprise', [BureauxController::class, 'bureauEntreprise'])->name('bureaux.entreprise');
        
    //véhicule création
    Route::get('/vehicule/entreprise', [VehiculeController::class, 'vehicule'])->name('vehicule');
    Route::post('/vehiculeStore', [VehiculeController::class, 'vehiculeStore'])->name('vehicule.store');

    //Recuperer les vehicules d'une entreprise
     Route::get('vehicule/Entreprise', [VehiculeController::class, 'VehiculeEntreprise'])->name('vehicule.entreprise');

     Route::post('/vehicules/{id}/update', [VehiculeController::class, 'vehiculeUpdate'])->name('vehicule.update');


    //Appartement création
    Route::get('appartement/creer', [AppartementController::class, 'appartement'])->name('appartement');
    Route::post('/appartementStore', [AppartementController::class, 'appartementStore'])->name('appartement.store');

    //Recuperer les appartement d'une entreprise
    Route::get('appartement/Entreprise', [AppartementController::class, 'appartementEntreprise'])->name('appartement.entreprise');

    //Modifier un appartement
    Route::get('/appartement/modifier/{appartement}', [AppartementController::class, 'update'])->name('appartement.mod');
    Route::post('/appartement/{appartement}/update', [AppartementController::class, 'appartementUpdate'])->name('appartement.update');

    // Profil
    Route::get('/entreprise/profil', [ProfilController::class, 'profilUser'])->name('user.profil');
    Route::post('/update/profil/{entreprise}', [ProfilController::class, 'updateProfil'])->name('profil.update');

    Route::post('/change-password', [ProfilController::class, 'update'])->name('password.update');

    //end

    //entreprise
    Route::get('/Entreprise/liste', [EntrepriseController::class, 'index'])->name('entreprise.liste');
    Route::get('/entreprise/{id}', [EntrepriseController::class, 'show'])->name('entreprise.show');
    Route::put('/entreprise/{id}/activer', [EntrepriseController::class, 'activer'])->name('entreprise.activer');
    Route::put('/entreprise/{id}/desactiver', [EntrepriseController::class, 'desactiver'])->name('entreprise.desactiver');

    //end

});
// Bureaux
    //liste bureau
    Route::get('bureaux/liste', [BureauxController::class, 'index'])->name('bureaux.index');
    //Détail bureau
    // Route::get('/{bureau}', [BureauxController::class, 'bureauDetail'])->name('bureaux.detail');

    
    //detail d'un bureau
    Route::get('bureaux/{bureau}', [BureauxController::class, 'bureauDetail'])->name('bureaux.detail');
    
//end

//Appartement

    //liste appartement(tout)
    Route::get('appartement/liste', [AppartementController::class, 'index'])->name('appartement.index');
    
    
    //detail d'un appartement
    Route::get('appartement/{appartement}', [AppartementController::class, 'appartementDetail'])->name('appartement.detail');
    
   
    Route::get('/search/appartements', [AppartementController::class, 'searchAppartement'])->name('search.appartement');

    Route::post('/appartement/mail', [AppartementController::class, 'mailProprietaire'])->name('appartement.mailProprietaire');


//end


