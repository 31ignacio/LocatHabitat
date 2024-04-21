<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\BureauxController;
use App\Http\Controllers\ContacteController;
use App\Http\Controllers\EntrepriseController;
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

        Route::get('/login', [UserAuthController::class, 'login'])->name('user.login');
        Route::post('/login', [UserAuthController::class, 'handleUserLogin'])->name('handleUserLogin'); 



    });
// end

// Profil
    Route::get('/profil', [ProfilController::class, 'profilUser'])->name('user.profil');
    Route::post('/update/profil/{entreprise}', [ProfilController::class, 'updateProfil'])->name('profil.update');

    Route::post('/change-password', [ProfilController::class, 'update'])->name('password.update');

//end

//contacte
 Route::get('/contacte', [ContacteController::class, 'contacte'])->name('contacte.create');


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
    //véhicule création
    Route::get('/vehicule', [VehiculeController::class, 'vehicule'])->name('vehicule');
    Route::post('/vehiculeStore', [VehiculeController::class, 'vehiculeStore'])->name('vehicule.store');

    //les annonces d'une entreprise (par defaut la liste des appartements)
    Route::get('/EntrepriseAnnonce', [VehiculeController::class, 'EntrepriseAnnonce'])->name('entreprise.annonce');

    //Recuperer les vehicules d'une entreprise
    Route::get('vehicule/Entreprise', [VehiculeController::class, 'VehiculeEntreprise'])->name('vehicule.entreprise');

    //detail d'un vehicule
    Route::get('/{vehicule}', [VehiculeController::class, 'VehiculeDetail'])->name('vehicule.detail');

    Route::post('/vehicules/{id}/update', [VehiculeController::class, 'vehiculeUpdate'])->name('vehicule.update');

    Route::get('/search/Vehicule', [VehiculeController::class, 'searchVehicule'])->name('search.vehicule');

//end


// Bureaux
    //liste bureau
    Route::get('bureaux/liste', [BureauxController::class, 'index'])->name('bureaux.index');
    //Détail bureau
    // Route::get('/{bureau}', [BureauxController::class, 'bureauDetail'])->name('bureaux.detail');

    //Bureaux création
    Route::get('bureaux/creer', [BureauxController::class, 'bureaux'])->name('bureaux');
    Route::post('/bureauxStore', [BureauxController::class, 'burauxStore'])->name('bureaux.store');

    //detail d'un bureau
    Route::get('bureaux/{bureau}', [BureauxController::class, 'bureauDetail'])->name('bureaux.detail');
    //Recuperer les bureaux d'une entreprise
    Route::get('bureau/Entreprise', [BureauxController::class, 'bureauEntreprise'])->name('bureaux.entreprise');
    //Modifier un bureau
    Route::post('/bureaux/{id}/update', [BureauxController::class, 'bureauUpdate'])->name('bureaux.update');

    Route::get('/search/bureaux', [BureauxController::class, 'searchBureaux'])->name('search.bureaux');


//end

//Appartement

    //liste appartement(tout)
    Route::get('appartement/liste', [AppartementController::class, 'index'])->name('appartement.index');
    
    //Appartement création
    Route::get('appartement/creer', [AppartementController::class, 'appartement'])->name('appartement');
    Route::post('/appartementStore', [AppartementController::class, 'appartementStore'])->name('appartement.store');

    //detail d'un appartement
    Route::get('appartement/{appartement}', [AppartementController::class, 'appartementDetail'])->name('appartement.detail');
    
    //Recuperer les appartement d'une entreprise
    Route::get('appartement/Entreprise', [AppartementController::class, 'appartementEntreprise'])->name('appartement.entreprise');

    //Modifier un appartement
    Route::post('/appartement/{id}/update', [AppartementController::class, 'appartementUpdate'])->name('appartement.update');

    Route::get('/search/appartements', [AppartementController::class, 'searchAppartement'])->name('search.appartement');

//end

Route::get('/Entreprise/liste', [EntrepriseController::class, 'index'])->name('entreprise.liste');
Route::get('/entreprise/{id}', [EntrepriseController::class, 'show'])->name('entreprise.show');
Route::put('/entreprise/{id}/activer', [EntrepriseController::class, 'activer'])->name('entreprise.activer');
Route::put('/entreprise/{id}/desactiver', [EntrepriseController::class, 'desactiver'])->name('entreprise.desactiver');
