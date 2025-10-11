<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jardin de Cocagne')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen font-['Roboto']">
    <header class="bg-white shadow-sm mb-8">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="/" class="text-2xl font-bold text-green-700">Jardin de Cocagne</a>
            <nav class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-green-700">Accueil</a>
                <a href="{{ route('depots.index') }}" class="text-gray-700 hover:text-green-700">Dépôts</a>
                <a href="{{ route('tournees.index') }}" class="text-gray-700 hover:text-green-700">Tournées</a>
                <a href="{{ route('panier.index') }}" class="text-gray-700 hover:text-green-700">Paniers</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-white border-t border-gray-200 mt-12 py-6 text-center text-gray-500">
        &copy; {{ date('Y') }} Jardin de Cocagne. Tous droits réservés.
    </footer>
    @stack('scripts')
</body>
</html>
