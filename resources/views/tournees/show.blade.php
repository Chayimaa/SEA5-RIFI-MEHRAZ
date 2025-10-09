<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Tournée - Jardin de Cocagne</title>
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
        .info-card {
            transition: transform 0.2s;
        }
        .info-card:hover {
            transform: translateY(-2px);
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
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- En-tête avec actions -->
        <div class="mb-8 flex justify-between items-start">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $tournee->nom }}</h1>
                <p class="text-gray-600">Détails complets de la tournée</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('tournees.edit', $tournee) }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium flex items-center shadow-md transition-colors duration-200">
                    <i class="fas fa-edit mr-2"></i> Modifier
                </a>
                <form action="{{ route('tournees.destroy', $tournee) }}" method="POST" 
                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette tournée ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium flex items-center shadow-md transition-colors duration-200">
                        <i class="fas fa-trash mr-2"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>

        <!-- Informations principales -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 info-card">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-calendar text-blue-600"></i>
                    </div>
                    <span class="text-sm text-gray-600">Date</span>
                </div>
                <p class="text-xl font-bold text-gray-900">{{ $tournee->date_tournee->format('d/m/Y') }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $tournee->date_tournee->locale('fr')->isoFormat('dddd') }}</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 info-card">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-clock text-green-600"></i>
                    </div>
                    <span class="text-sm text-gray-600">Heure départ</span>
                </div>
                <p class="text-xl font-bold text-gray-900">
                    {{ $tournee->heure_depart ? \Carbon\Carbon::parse($tournee->heure_depart)->format('H:i') : 'Non définie' }}
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 info-card">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-warehouse text-purple-600"></i>
                    </div>
                    <span class="text-sm text-gray-600">Dépôts</span>
                </div>
                <p class="text-xl font-bold text-gray-900">{{ $tournee->depots->count() }}</p>
                <p class="text-sm text-gray-500 mt-1">à visiter</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 info-card">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-info-circle text-yellow-600"></i>
                    </div>
                    <span class="text-sm text-gray-600">Statut</span>
                </div>
                @if($tournee->statut == 'planifiée')
                    <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        Planifiée
                    </span>
                @elseif($tournee->statut == 'en cours')
                    <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-blue-100 text-blue-800">
                        En cours
                    </span>
                @else
                    <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-green-100 text-green-800">
                        Terminée
                    </span>
                @endif
            </div>
        </div>

        <!-- Remarques -->
        @if($tournee->remarques)
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-comment-alt text-gray-600 mr-3"></i>
                Remarques
            </h2>
            <p class="text-gray-700 whitespace-pre-line">{{ $tournee->remarques }}</p>
        </div>
        @endif

        <!-- Liste des dépôts -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-[#059669] to-[#047857] px-6 py-4">
                <h2 class="text-xl font-bold text-white flex items-center">
                    <i class="fas fa-route mr-3"></i>
                    Itinéraire de la tournée
                </h2>
            </div>

            @if($tournee->depots->count() > 0)
            <div class="p-6">
                <div class="space-y-4">
                    @foreach($tournee->depots->sortBy('pivot.ordre') as $index => $depot)
                    <div class="flex items-start border-l-4 border-green-600 pl-6 py-4 bg-gray-50 rounded-r-lg hover:bg-gray-100 transition-colors">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center font-bold shadow-md">
                                {{ $index + 1 }}
                            </div>
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $depot->nom }}</h3>
                            <p class="text-gray-600 mt-1 flex items-center">
                                <i class="fas fa-map-marker-alt mr-2 text-red-500"></i>
                                {{ $depot->adresse }}
                            </p>
                            <div class="mt-2 flex items-center space-x-4 text-sm text-gray-500">
                                <span class="flex items-center">
                                    <i class="fas fa-expand-arrows-alt mr-1"></i>
                                    Capacité: {{ $depot->capacite }} m²
                                </span>
                            </div>
                        </div>
                        @if($index < $tournee->depots->count() - 1)
                        <div class="ml-4 text-gray-400">
                            <i class="fas fa-arrow-down text-2xl"></i>
                        </div>
                        @else
                        <div class="ml-4 text-green-600">
                            <i class="fas fa-flag-checkered text-2xl"></i>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <div class="p-12 text-center text-gray-500">
                <i class="fas fa-warehouse text-6xl mb-4 text-gray-300"></i>
                <p class="text-lg">Aucun dépôt ajouté à cette tournée</p>
                <a href="{{ route('tournees.edit', $tournee) }}" 
                   class="mt-4 inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                    <i class="fas fa-plus mr-2"></i>
                    Ajouter des dépôts
                </a>
            </div>
            @endif
        </div>

        <!-- Récapitulatif -->
        @if($tournee->depots->count() > 0)
        <div class="mt-8 bg-blue-50 border border-blue-200 rounded-xl p-6">
            <div class="flex items-start">
                <i class="fas fa-info-circle text-blue-600 text-xl mr-3 mt-1"></i>
                <div>
                    <h3 class="font-semibold text-blue-900 mb-2">Récapitulatif de la tournée</h3>
                    <ul class="text-sm text-blue-800 space-y-1">
                        <li>• Nombre total de dépôts: <strong>{{ $tournee->depots->count() }}</strong></li>
                        <li>• Capacité totale: <strong>{{ $tournee->depots->sum('capacite') }} m²</strong></li>
                        <li>• Premier dépôt: <strong>{{ $tournee->depots->first()->nom }}</strong></li>
                        <li>• Dernier dépôt: <strong>{{ $tournee->depots->last()->nom }}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
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
</body>
</html>