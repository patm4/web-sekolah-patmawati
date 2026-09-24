<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\EkstrakurikulerController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Galeri
Route::get('/galeri', [GaleryController::class, 'index'])
    ->name('galeri');

// Ekstrakurikuler
Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])
    ->name('ekstrakurikuler');

// Guru
Route::get('/guru', [GuruController::class, 'index'])
    ->name('guru');

    // Profil
Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');

    // Jurusan
Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan');