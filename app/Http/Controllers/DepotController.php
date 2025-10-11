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
    public function create()
    {
        return view('depots.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'code_postal' => 'required|string|max:20',
            'ville' => 'required|string|max:100',
            'capacite' => 'required|integer|min:1',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);
        Depots::create($validated);
        return redirect()->route('depots.index')->with('success', 'Dépôt ajouté avec succès.');
    }

    public function edit(Depots $depot)
    {
        return view('depots.edit', compact('depot'));
    }

    public function update(Request $request, Depots $depot)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'code_postal' => 'required|string|max:20',
            'ville' => 'required|string|max:100',
            'capacite' => 'required|integer|min:1',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);
        $depot->update($validated);
        return redirect()->route('depots.index')->with('success', 'Dépôt modifié avec succès.');
    }

    public function destroy(Depots $depot)
    {
        $depot->delete();
        return redirect()->route('depots.index')->with('success', 'Dépôt supprimé avec succès.');
    }
}