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
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9fafb;
        }
        .logo-container {
            background: linear-gradient(135deg, #2d5016 0%, #4a7c3a 100%);
        }
        .green-gradient {
            background: linear-gradient(135deg, #2d5016 0%, #4a7c3a 100%);
        }
        .btn-primary {
            background-color: #4a7c3a;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #3a662b;
        }
        .depot-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .depot-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header avec logo et retour -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo et nom -->
                <div class="flex items-center space-x-4">
                  <div class="logo-container rounded-lg p-2 shadow-md bg-white flex justify-center items-center">
    <img src="{{ asset('images/logo.png') }}" alt="Logo Jardin de Cocagne" class="h-10 w-10 object-contain">
</div>

                    <div>
                        <h1 class="text-xl font-bold text-gray-800">Jardin de Cocagne</h1>
                        <p class="text-sm text-gray-600">Thaon-les-Vosges</p>
                    </div>
                </div>
                
                <!-- Bouton retour -->
                <a href="home" class="flex items-center space-x-2 text-gray-700 hover:text-green-700 transition-colors duration-200">
                    <i class="fas fa-arrow-left"></i>
                    <span>Retour à l'accueil</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- En-tête de page -->
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Gestion des Dépôts</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Gérez les différents dépôts de produits du Jardin de Cocagne de Thaon-les-Vosges</p>
        </div>

        <!-- Statistiques rapides -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white rounded-xl shadow-sm p-6 text-center depot-card">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-warehouse text-green-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">5</h3>
                <p class="text-gray-600">Dépôts actifs</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 text-center depot-card">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-boxes text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">342</h3>
                <p class="text-gray-600">Produits en stock</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm p-6 text-center depot-card">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-yellow-600 text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">3</h3>
                <p class="text-gray-600">Communes desservies</p>
            </div>
        </div>

        <!-- Tableau des dépôts -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-10">
           <div class="bg-gradient-to-r from-[#059669] to-[#047857] px-6 py-4 rounded-t-lg shadow-md">
    <h2 class="text-xl font-bold text-white">Liste des Dépôts</h2>
</div>

            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Adresse</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacité</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#001</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 font-medium">Dépôt Principal</td>
                            <td class="px-6 py-4 text-sm text-gray-600">12 Rue des Jardins, Thaon-les-Vosges</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">120 m²</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#002</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 font-medium">Dépôt Nord</td>
                            <td class="px-6 py-4 text-sm text-gray-600">5 Avenue des Fleurs, Thaon-les-Vosges</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">80 m²</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#003</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 font-medium">Dépôt Sud</td>
                            <td class="px-6 py-4 text-sm text-gray-600">22 Rue du Potager, Igney</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">65 m²</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Maintenance
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#004</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 font-medium">Dépôt Est</td>
                            <td class="px-6 py-4 text-sm text-gray-600">8 Rue des Vergers, Chavelot</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">95 m²</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#005</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 font-medium">Dépôt Ouest</td>
                            <td class="px-6 py-4 text-sm text-gray-600">15 Chemin des Cultures, Thaon-les-Vosges</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">110 m²</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Actif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-green-600 hover:text-green-900 mr-3"><i class="fas fa-edit"></i></a>
                                <a href="#" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bouton d'action -->
<div class="flex justify-center mt-8">
    <button class="bg-[#059669] hover:bg-[#047857] text-white px-6 py-3 rounded-lg font-medium flex items-center shadow-md transition-colors duration-200">
        <i class="fas fa-plus mr-2"></i> Ajouter un nouveau dépôt
    </button>
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