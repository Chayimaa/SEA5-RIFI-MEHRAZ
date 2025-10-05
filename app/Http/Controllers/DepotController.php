<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use App\Models\Depots;
use Illuminate\Http\Request;

class DepotController extends Controller
{
    // Affiche tous les dépôts
    public function index()
    {
        $depots = Depots::all();
        return view('depots.index', compact('depots'));
    }
}
