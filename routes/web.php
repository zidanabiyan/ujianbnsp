<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\GaleriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/ekskul', [EkskulController::class, 'index'])->name('ekskul');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');