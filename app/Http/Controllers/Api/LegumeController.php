<?php

namespace App\Http\Controllers\Api;

use App\Models\Legume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LegumeController extends Controller
{
    public function index()
    {
        return response()->json(Legume::all());
    }

    public function store(Request $request)
    {
        $legume = Legume::create($request->only(['nom', 'prix']));
        return response()->json($legume, 201);
    }

    public function show($id)
    {
        return response()->json(Legume::findOrFail($id));
    }

    public function destroy($id)
    {
        Legume::destroy($id);
        return response()->json(['message' => 'Légume supprimé']);
    }
}
