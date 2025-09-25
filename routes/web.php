<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect()->route('panier.index');
});

Route::get('/panier', [PanierController::class, 'index'])->name('panier.index');
Route::post('/panier', [PanierController::class, 'store'])->name('panier.store');
Route::delete('/panier/{id}', [PanierController::class, 'destroy'])->name('panier.destroy');

Route::get('/', [HomeController::class, 'index'])->name('home');
