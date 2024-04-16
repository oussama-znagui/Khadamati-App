<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

use  App\Models\User;
use  App\Models\Ville;
use  App\Models\Profession;
use App\Http\Controllers\ClientController;   



use Illuminate\Support\Facades\Hash;

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
});

Route::get('/login', function () {

    return view('Auth.login');
})->name('Auth.login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/profilePersonel', [ClientController::class, 'index'])->name('Client.profilePersonel');
