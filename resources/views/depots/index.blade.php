<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dépôts - Jardin de Cocagne Thaon-les-Vosges</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #f9fafb; }
        .logo-container { background: linear-gradient(135deg, #2d5016 0%, #4a7c3a 100%); }
        .green-gradient { background: linear-gradient(135deg, #2d5016 0%, #4a7c3a 100%); }
        .btn-primary { background-color: #4a7c3a; transition: all 0.3s ease; }
        .btn-primary:hover { background-color: #3a662b; }
        .depot-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .depot-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
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
                <a href="{{ route('home') }}" class="flex items-center space-x-2 text-gray-700 hover:text-green-700 transition-colors duration-200">
                    <i class="fas fa-arrow-left"></i>
                    <span>Retour à l'accueil</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Gestion des Dépôts</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Liste des dépôts enregistrés dans la base de données</p>
        </div>

        <!-- Tableau dynamique des dépôts -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-10">
            <div class="bg-gradient-to-r from-[#059669] to-[#047857] px-6 py-4 rounded-t-lg shadow-md">
                <h2 class="text-xl font-bold text-white">Liste des Dépôts</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Capacité</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Adresse</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Code postal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ville</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Longitude</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Latitude</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($depots as $depot)
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $depot->id }}</td>
                                <td class="px-6 py-4 text-sm font-semibold text-gray-800">{{ $depot->nom }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->capacite }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->adresse }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->code_postal }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->ville }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->longitude }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->latitude }}</td>
                                <td class="px-6 py-4 text-center text-sm font-medium">
                                    <a href="{{ route('depots.edit', $depot->id) }}" class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('depots.destroy', $depot->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="px-6 py-4 text-center text-gray-500">Aucun dépôt trouvé.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bouton d'ajout -->
        <div class="flex justify-center mt-8">
            <a href="{{ route('depots.create') }}" class="bg-[#059669] hover:bg-[#047857] text-white px-6 py-3 rounded-lg font-medium flex items-center shadow-md transition-colors duration-200">
                <i class="fas fa-plus mr-2"></i> Ajouter un nouveau dépôt
            </a>
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
                    <a href="#" class="text-gray-400 hover:text-green-600"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-green-600"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-green-600"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
