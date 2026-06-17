<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});



// Tes routes principales
Route::get('/', [PageController::class, 'home']);
Route::get('/projets', [PageController::class, 'projets'])->name('projets');
Route::get('/a-propos', [PageController::class, 'about']);
Route::get('/parcours', [PageController::class, 'parcours']);

// Voici la correction pour la route contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
