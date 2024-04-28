<?php

use  App\Models\User;
use  App\Models\Ville;

use  App\Models\Profession;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BricoleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StripeController;

Route::get('/', function () {


    // Ville::create([
    //     'ville' => "Casablanca"
    // ]);
    // Ville::create([
    //     'ville' => "Rabat"
    // ]);
    // Ville::create([
    //     'ville' => "Agadir"
    // ]);

    // User::create([
    //     'prenom' => "oussama",
    //     'nom' => "znagui",
    //     'sexe' => 'Homme',
    //     'adresse' => "123 dakhla",
    //     'tel' => "0669666205",
    //     'role' => 'Client',

    //     'email' => "znagui.info@gmail.com",
    //     'password' => Hash::make("aaaaaaaa"),
    //     'ville_id' => 3,
    // ]);

    // Profession::create([
    //     'profession' => "Plombier"
    // ]);
    return view('welcome');
})->name('/');
Route::get('/login', function () {

    return view('Auth.login');
})->name('Auth.login');

Route::get('/register', function () {

    return view('Auth.register', [
        'villes' => Ville::All(),
    ]);
})->name('Auth.register');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout']);






Route::get('/profilePersonel', [ClientController::class, 'index'])->name('Client.profilePersonel');
Route::get('/editProfile', [ClientController::class, 'editProfile'])->name('Client.editProfile');
// 

Route::get('/addJob', [BricoleController::class, 'addform'])->name('Client.addJob');
Route::post('/addJob', [BricoleController::class, 'store']);

Route::get('/history', [BricoleController::class, 'index']);
Route::put('/editProfile/{user}', [UserController::class, 'update'])->name('Client.editProfile');

Route::get('/bricole/{bricole}', [BricoleController::class, 'show']);

Route::put('/accepteOffre/{offre}', [OffreController::class, 'update']);
Route::get('/confirmation', [ConfirmationController::class, 'index']);

Route::post('/session', [StripeController::class, 'session']);
Route::get('/success/{offre_id}', [StripeController::class, 'success'])->name('success');

Route::get('/freelancer', [FreelancerController::class, 'index']);

Route::get('/facture', [PdfController::class, 'index']);
Route::post('/gneratePdf/{offre}', [PdfController::class, 'pdf']);

Route::post('/reclamation/{offre}', [ReclamationController::class, 'store']);
Route::get('/reclamation', [ReclamationController::class, 'index']);

Route::post('/review/{offre}', [ReviewController::class, 'store']);

Route::put('/updateReview/{review}', [ReviewController::class, 'update']);



Route::get('/profilePersonel-freelancer', [FreelancerController::class, 'index1'])->name('Freelancer.profilePersonel');

Route::get('/bricolePubliee', [BricoleController::class, 'bricole']);

Route::post('/addOffre/{bricole}', [OffreController::class, 'store'])->name('offre.store');

Route::get('/confirmation-freelancer', [ConfirmationController::class, 'indexFreelancer']);
