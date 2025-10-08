<?php

namespace App\Http\Controllers;

use App\Models\Tournee;
use App\Models\Depots;
use Illuminate\Http\Request;

class TourneeController extends Controller
{
    /**
     * Afficher toutes les tournées (READ)
     */
    public function index()
    {
        $tournees = Tournee::with('depots')->orderBy('date_tournee', 'desc')->get();
        return view('tournees.index', compact('tournees'));
    }

    /**
     * Formulaire pour créer une nouvelle tournée (CREATE - formulaire)
     */
    public function create()
    {
        $depots = Depots::all();
        return view('tournees.create', compact('depots'));
    }

    /**
     * Enregistrer une nouvelle tournée (CREATE - enregistrement)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'date_tournee' => 'required|date',
            'heure_depart' => 'nullable',
            'statut' => 'required|string',
            'remarques' => 'nullable|string',
            'depots' => 'nullable|array',
        ]);

        $tournee = Tournee::create($validated);

        // Attacher les dépôts sélectionnés avec leur ordre
        if ($request->has('depots')) {
            foreach ($request->depots as $index => $depotId) {
                $tournee->depots()->attach($depotId, ['ordre' => $index + 1]);
            }
        }

        return redirect()->route('tournees.index')
                         ->with('success', 'Tournée créée avec succès !');
    }

    /**
     * Afficher une tournée spécifique (READ - détail)
     */
    public function show(Tournee $tournee)
    {
        $tournee->load('depots');
        return view('tournees.show', compact('tournee'));
    }

    /**
     * Formulaire pour modifier une tournée (UPDATE - formulaire)
     */
    public function edit(Tournee $tournee)
    {
        $depots = Depots::all();
        $tournee->load('depots');
        return view('tournees.edit', compact('tournee', 'depots'));
    }

    /**
     * Enregistrer les modifications (UPDATE - enregistrement)
     */
    public function update(Request $request, Tournee $tournee)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'date_tournee' => 'required|date',
            'heure_depart' => 'nullable',
            'statut' => 'required|string',
            'remarques' => 'nullable|string',
            'depots' => 'nullable|array',
        ]);

        $tournee->update($validated);

        // Mettre à jour les dépôts
        $tournee->depots()->detach(); // Supprimer les anciennes associations
        if ($request->has('depots')) {
            foreach ($request->depots as $index => $depotId) {
                $tournee->depots()->attach($depotId, ['ordre' => $index + 1]);
            }
        }

        return redirect()->route('tournees.index')
                         ->with('success', 'Tournée modifiée avec succès !');
    }

    /**
     * Supprimer une tournée (DELETE)
     */
    public function destroy(Tournee $tournee)
    {
        $tournee->delete();
        return redirect()->route('tournees.index')
                         ->with('success', 'Tournée supprimée avec succès !');
    }
}