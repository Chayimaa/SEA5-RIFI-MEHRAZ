<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepotController;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/panier', [PanierController::class, 'index'])->name('panier.index');
Route::post('/panier', [PanierController::class, 'store'])->name('panier.store');
Route::delete('/panier/{id}', [PanierController::class, 'destroy'])->name('panier.destroy');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/depots', [DepotController::class, 'index'])->name('depots.index');
