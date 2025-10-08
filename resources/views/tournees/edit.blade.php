<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la Tournée - Jardin de Cocagne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9fafb;
        }
        .logo-container {
            background: linear-gradient(135deg, #2d5016 0%, #4a7c3a 100%);
        }
        .depot-item {
            cursor: move;
            transition: all 0.2s;
        }
        .depot-item:hover {
            background-color: #f3f4f6;
        }
        .depot-item.selected {
            background-color: #d1fae5;
            border-color: #059669;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center space-x-4">
                    <div class="logo-container rounded-lg p-2 shadow-md bg-white flex justify-center items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Jardin de Cocagne" class="h-10 w-10 object-contain">
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">Jardin de Cocagne</h1>
                        <p class="text-sm text-gray-600">Thaon-les-Vosges</p>
                    </div>
                </div>
                <a href="{{ route('tournees.index') }}" class="flex items-center space-x-2 text-gray-700 hover:text-green-700 transition-colors duration-200">
                    <i class="fas fa-arrow-left"></i>
                    <span>Retour aux tournées</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Modifier la tournée</h1>
            <p class="text-gray-600">Modifiez les informations et réorganisez les dépôts</p>
        </div>

        <!-- Formulaire -->
        <form action="{{ route('tournees.update', $tournee) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Carte informations générales -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-info-circle text-green-600 mr-3"></i>
                    Informations générales
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nom -->
                    <div class="md:col-span-2">
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">
                            Nom de la tournée <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="nom" id="nom" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                               placeholder="Ex: Tournée Nord Matin"
                               value="{{ old('nom', $tournee->nom) }}">
                        @error('nom')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date -->
                    <div>
                        <label for="date_tournee" class="block text-sm font-medium text-gray-700 mb-2">
                            Date de la tournée <span class="text-red-500">*</span>
                        </label>
                        <input type="date" name="date_tournee" id="date_tournee" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                               value="{{ old('date_tournee', $tournee->date_tournee->format('Y-m-d')) }}">
                        @error('date_tournee')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Heure départ -->
                    <div>
                        <label for="heure_depart" class="block text-sm font-medium text-gray-700 mb-2">
                            Heure de départ
                        </label>
                        <input type="time" name="heure_depart" id="heure_depart"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                               value="{{ old('heure_depart', $tournee->heure_depart ? \Carbon\Carbon::parse($tournee->heure_depart)->format('H:i') : '') }}">
                        @error('heure_depart')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Statut -->
                    <div>
                        <label for="statut" class="block text-sm font-medium text-gray-700 mb-2">
                            Statut <span class="text-red-500">*</span>
                        </label>
                        <select name="statut" id="statut" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <option value="planifiée" {{ old('statut', $tournee->statut) == 'planifiée' ? 'selected' : '' }}>Planifiée</option>
                            <option value="en cours" {{ old('statut', $tournee->statut) == 'en cours' ? 'selected' : '' }}>En cours</option>
                            <option value="terminée" {{ old('statut', $tournee->statut) == 'terminée' ? 'selected' : '' }}>Terminée</option>
                        </select>
                        @error('statut')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remarques -->
                    <div class="md:col-span-2">
                        <label for="remarques" class="block text-sm font-medium text-gray-700 mb-2">
                            Remarques
                        </label>
                        <textarea name="remarques" id="remarques" rows="3"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                  placeholder="Notes ou instructions spéciales...">{{ old('remarques', $tournee->remarques) }}</textarea>
                        @error('remarques')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Sélection des dépôts -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-warehouse text-green-600 mr-3"></i>
                    Sélection des dépôts
                </h2>
                <p class="text-sm text-gray-600 mb-6">
                    <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                    Cochez les dépôts à inclure dans cette tournée. L'ordre de sélection définit l'ordre de passage.
                </p>

                @if($depots->count() > 0)
                <div id="depots-list" class="space-y-3">
                    @php
                        $selectedDepots = old('depots', $tournee->depots->pluck('id')->toArray());
                    @endphp
                    
                    @foreach($depots as $depot)
                    <div class="depot-item border-2 border-gray-200 rounded-lg p-4 hover:shadow-md transition-all">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" name="depots[]" value="{{ $depot->id }}" 
                                   class="depot-checkbox w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500 mr-4"
                                   {{ (is_array($selectedDepots) && in_array($depot->id, $selectedDepots)) ? 'checked' : '' }}>
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900">{{ $depot->nom }}</h3>
                                <p class="text-sm text-gray-600 mt-1">
                                    <i class="fas fa-map-marker-alt mr-1"></i>{{ $depot->adresse }}
                                </p>
                                <p class="text-xs text-gray-500 mt-1">
                                    Capacité: {{ $depot->capacite }} m²
                                </p>
                            </div>
                            <span class="ordre-badge hidden bg-green-600 text-white px-3 py-1 rounded-full text-sm font-bold ml-4"></span>
                        </label>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="text-center py-8 text-gray-500">
                    <i class="fas fa-warehouse text-4xl mb-3"></i>
                    <p>Aucun dépôt disponible</p>
                </div>
                @endif
            </div>

            <!-- Boutons d'action -->
            <div class="flex justify-end space-x-4">
                <a href="{{ route('tournees.index') }}" 
                   class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors duration-200">
                    <i class="fas fa-times mr-2"></i>Annuler
                </a>
                <button type="submit" 
                        class="bg-[#059669] hover:bg-[#047857] text-white px-6 py-3 rounded-lg font-medium shadow-md transition-colors duration-200">
                    <i class="fas fa-save mr-2"></i>Enregistrer les modifications
                </button>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="text-center md:text-left">
                    <p class="text-sm text-gray-500">
                        &copy; 2025 Jardin de Cocagne Thaon-les-Vosges. Tous droits réservés.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Gestion de l'ordre des dépôts
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.depot-checkbox');
            
            function updateOrdres() {
                let ordre = 1;
                checkboxes.forEach(checkbox => {
                    const item = checkbox.closest('.depot-item');
                    const badge = item.querySelector('.ordre-badge');
                    
                    if (checkbox.checked) {
                        item.classList.add('selected');
                        badge.classList.remove('hidden');
                        badge.textContent = '#' + ordre;
                        ordre++;
                    } else {
                        item.classList.remove('selected');
                        badge.classList.add('hidden');
                    }
                });
            }
            
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateOrdres);
            });
            
            // Initialiser au chargement
            updateOrdres();
        });
    </script>
</body>
</html>