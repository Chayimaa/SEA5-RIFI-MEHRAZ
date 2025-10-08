<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournées - Jardin de Cocagne Thaon-les-Vosges</title>
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
        .tournee-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .tournee-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
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
                <a href="{{ url('/home') }}" class="flex items-center space-x-2 text-gray-700 hover:text-green-700 transition-colors duration-200">
                    <i class="fas fa-arrow-left"></i>
                    <span>Retour à l'accueil</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- En-tête de page -->
        <div class="mb-10">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Gestion des Tournées</h1>
                    <p class="text-gray-600">Planifiez et organisez les tournées de livraison</p>
                </div>
                <a href="{{ route('tournees.create') }}" class="bg-[#059669] hover:bg-[#047857] text-white px-6 py-3 rounded-lg font-medium flex items-center shadow-md transition-colors duration-200">
                    <i class="fas fa-plus mr-2"></i> Nouvelle tournée
                </a>
            </div>
        </div>

        <!-- Messages de succès -->
        @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-3"></i>
                <p>{{ session('success') }}</p>
            </div>
        </div>
        @endif

        <!-- Statistiques rapides -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white rounded-xl shadow-sm p-6 text-center tournee-card">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-route text-green-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $tournees->count() }}</h3>
                <p class="text-gray-600">Tournées totales</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 text-center tournee-card">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $tournees->where('statut', 'planifiée')->count() }}</h3>
                <p class="text-gray-600">Planifiées</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 text-center tournee-card">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-truck text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">{{ $tournees->where('statut', 'en cours')->count() }}</h3>
                <p class="text-gray-600">En cours</p>
            </div>
        </div>

        <!-- Tableau des tournées -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-[#059669] to-[#047857] px-6 py-4 rounded-t-lg shadow-md">
                <h2 class="text-xl font-bold text-white">Liste des Tournées</h2>
            </div>
            
            @if($tournees->count() > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure départ</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dépôts</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($tournees as $tournee)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $tournee->nom }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                <i class="fas fa-calendar mr-2"></i>{{ $tournee->date_tournee->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                <i class="fas fa-clock mr-2"></i>{{ $tournee->heure_depart ? \Carbon\Carbon::parse($tournee->heure_depart)->format('H:i') : 'Non définie' }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-semibold">
                                    {{ $tournee->depots->count() }} dépôt(s)
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($tournee->statut == 'planifiée')
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Planifiée
                                    </span>
                                @elseif($tournee->statut == 'en cours')
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        En cours
                                    </span>
                                @else
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Terminée
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('tournees.show', $tournee) }}" class="text-blue-600 hover:text-blue-900 mr-3" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('tournees.edit', $tournee) }}" class="text-green-600 hover:text-green-900 mr-3" title="Modifier">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('tournees.destroy', $tournee) }}" method="POST" class="inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette tournée ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="text-center py-12">
                <i class="fas fa-route text-gray-300 text-6xl mb-4"></i>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Aucune tournée</h3>
                <p class="text-gray-600 mb-4">Commencez par créer votre première tournée</p>
                <a href="{{ route('tournees.create') }}" class="inline-flex items-center bg-[#059669] hover:bg-[#047857] text-white px-6 py-3 rounded-lg font-medium shadow-md transition-colors duration-200">
                    <i class="fas fa-plus mr-2"></i> Créer une tournée
                </a>
            </div>
            @endif
        </div>
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
                <div class="mt-4 flex justify-center md:mt-0 space-x-6">
                    <a href="#" class="text-gray-400 hover:text-green-600">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-green-600">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-green-600">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>