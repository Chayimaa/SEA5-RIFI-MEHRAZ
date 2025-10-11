@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-green-700">Ajouter un dépôt</h1>
    <form action="{{ route('depots.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-gray-700">Nom</label>
            <input type="text" name="nom" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Adresse</label>
            <input type="text" name="adresse" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Code postal</label>
            <input type="text" name="code_postal" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Ville</label>
            <input type="text" name="ville" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Capacité</label>
            <input type="number" name="capacite" class="w-full border rounded px-3 py-2" min="1" required>
        </div>
        <div>
            <label class="block text-gray-700">Latitude</label>
            <input type="text" name="latitude" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Longitude</label>
            <input type="text" name="longitude" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded">Enregistrer</button>
        </div>
    </form>
</div>
@endsection
