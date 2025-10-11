@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10">
    <div class="bg-white shadow rounded-lg p-8">
        <h1 class="text-3xl font-bold mb-8 text-green-700 flex items-center">
            <i class="fas fa-warehouse mr-3"></i> Modifier le dépôt
        </h1>
        <form action="{{ route('depots.update', $depot) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Nom</label>
                    <input type="text" name="nom" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-green-600 focus:border-green-600" value="{{ old('nom', $depot->nom) }}" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Capacité</label>
                    <input type="number" name="capacite" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-green-600 focus:border-green-600" min="1" value="{{ old('capacite', $depot->capacite) }}" required>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-medium mb-1">Adresse</label>
                    <input type="text" name="adresse" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-green-600 focus:border-green-600" value="{{ old('adresse', $depot->adresse) }}" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Code postal</label>
                    <input type="text" name="code_postal" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-green-600 focus:border-green-600" value="{{ old('code_postal', $depot->code_postal) }}" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Ville</label>
                    <input type="text" name="ville" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-green-600 focus:border-green-600" value="{{ old('ville', $depot->ville) }}" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Latitude</label>
                    <input type="text" name="latitude" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-green-600 focus:border-green-600" value="{{ old('latitude', $depot->latitude) }}" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Longitude</label>
                    <input type="text" name="longitude" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-green-600 focus:border-green-600" value="{{ old('longitude', $depot->longitude) }}" required>
                </div>
            </div>
            <div class="flex justify-end mt-8">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-8 py-2 rounded shadow font-semibold text-lg flex items-center">
                    <i class="fas fa-save mr-2"></i> Mettre à jour
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
