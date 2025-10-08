<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\TourneeController;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/panier', [PanierController::class, 'index'])->name('panier.index');
Route::post('/panier', [PanierController::class, 'store'])->name('panier.store');
Route::delete('/panier/{id}', [PanierController::class, 'destroy'])->name('panier.destroy');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('depots', App\Http\Controllers\DepotController::class);

Route::get('/depots', [DepotController::class, 'index'])->name('depots.index');


Route::resource('tournees', TourneeController::class);
