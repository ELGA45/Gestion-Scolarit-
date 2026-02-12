<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\SousNiveauController;
use App\Http\Controllers\TarifController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashbordController::class, 'index'])
      ->name('dashboard');
Route::resource('filieres', FiliereController::class);
Route::resource('niveaux', NiveauController::class);
Route::resource('classes', ClasseController::class);
Route::resource('tarifs', TarifController::class);
