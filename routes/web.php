<?php


use App\Http\Controllers\FiliereController;
use App\Http\Controllers\TarifController;
use Illuminate\Support\Facades\Route;

Route::resource('filieres', FiliereController::class);
Route::resource('tarifs', TarifController::class);
