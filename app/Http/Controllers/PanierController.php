<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Legume;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index()
    {
        $items = Panier::with('legume')->get();
        return view('panier.index', compact('items'));
    }

    public function store(Request $request)
    {
        Panier::create([
            'legume_id' => $request->legume_id,
            'quantite' => $request->quantite ?? 1,
        ]);

        return redirect()->route('panier.index');
    }

    public function destroy($id)
    {
        Panier::destroy($id);
        return redirect()->route('panier.index');
    }
}
