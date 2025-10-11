<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte - {{ $tournee->nom }} - Jardin de Cocagne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" />
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9fafb;
        }
        
        #map {
            height: 600px;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        .leaflet-popup-content {
            font-size: 14px;
        }
        
        .leaflet-popup-close-button {
            width: 26px !important;
            height: 26px !important;
        }
        
        .legend {
            background: white;
            padding: 12px 16px;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }
        
        .legend-color {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            border-radius: 50%;
        }
        
        .logo-container {
            background: linear-gradient(135deg, #2d5016 0%, #4a7c3a 100%);
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
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10 object-contain">
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
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- En-tête -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $tournee->nom }}</h1>
                    <div class="flex items-center space-x-4 text-gray-600">
                        <span><i class="fas fa-calendar mr-2"></i>{{ $tournee->date_tournee->format('d/m/Y') }}</span>
                        <span><i class="fas fa-clock mr-2"></i>{{ $tournee->heure_depart ? \Carbon\Carbon::parse($tournee->heure_depart)->format('H:i') : 'Non définie' }}</span>
                        <span><i class="fas fa-map-pin mr-2"></i>{{ $tournee->depots->count() }} dépôt(s)</span>
                    </div>
                </div>
                <a href="{{ route('tournees.show', $tournee) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium flex items-center shadow-md transition-colors duration-200">
                    <i class="fas fa-info-circle mr-2"></i> Détails
                </a>
            </div>
        </div>

        <!-- Carte Leaflet -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-[#059669] to-[#047857] px-6 py-4 shadow-md">
                <h2 class="text-xl font-bold text-white">
                    <i class="fas fa-map mr-2"></i>Itinéraire de la tournée
                </h2>
            </div>
            <div id="map"></div>
        </div>

        <!-- Liste des dépôts -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-[#059669] to-[#047857] px-6 py-4 shadow-md">
                <h2 class="text-xl font-bold text-white">
                    <i class="fas fa-list mr-2"></i>Dépôts de la tournée
                </h2>
            </div>
            
            @if($tournee->depots->count() > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ordre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Adresse</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ville</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacité</th>
                        </tr>
                    </thead>
<tbody class="bg-white divide-y divide-gray-200">
    @foreach($tournee->depots as $depot)
    <tr class="hover:bg-gray-50 transition-colors duration-150 depot-row cursor-pointer" data-index="{{ $loop->index }}">
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                #{{ $depot->pivot->ordre }}
            </span>
        </td>
        <td class="px-6 py-4 text-sm font-medium text-gray-800">{{ $depot->nom }}</td>
        <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->adresse }}</td>
        <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->code_postal }} {{ $depot->ville }}</td>
        <td class="px-6 py-4 text-sm text-gray-600">{{ $depot->capacite }} places</td>
    </tr>
    @endforeach
</tbody>
                </table>
            </div>
            @else
            <div class="text-center py-12">
                <i class="fas fa-inbox text-gray-300 text-6xl mb-4"></i>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Aucun dépôt</h3>
                <p class="text-gray-600">Cette tournée ne contient aucun dépôt</p>
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

    <!-- Leaflet JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
    
    <script>

        // Données des dépôts
    const depots = {!! $depotsJson ?? '[]' !!};

        // Initialiser la carte
        let map = L.map('map').setView([48.5, 6.5], 10); // Centre approximatif des Vosges
        
        // Ajouter le fond de carte OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            maxZoom: 19
        }).addTo(map);
        
        // Tableau pour stocker les marqueurs et lignes
        let markers = [];
        let lines = [];
        let bounds = L.latLngBounds();
        
        // Créer les marqueurs et les lignes
        depots.forEach((depot, index) => {
            const lat = parseFloat(depot.latitude);
            const lng = parseFloat(depot.longitude);
            const ordre = depot.pivot.ordre;
            
            // Créer un marqueur
            let marker = L.circleMarker([lat, lng], {
                radius: 8,
                fillColor: '#059669',
                color: '#047857',
                weight: 2,
                opacity: 1,
                fillOpacity: 0.8
            });
            
            // Popup du marqueur
            let popupContent = `
                <div class="font-semibold text-green-700 mb-2">Étape ${ordre}</div>
                <div class="font-bold">${depot.nom}</div>
                <div class="text-sm text-gray-600">${depot.adresse}</div>
                <div class="text-sm text-gray-600">${depot.code_postal} ${depot.ville}</div>
                <div class="text-sm text-gray-600 mt-2">Capacité: ${depot.capacite} places</div>
            `;
            
            marker.bindPopup(popupContent);
            marker.addTo(map);
            markers.push(marker);
            bounds.extend([lat, lng]);
        });
        
        // Créer les lignes entre les dépôts (dans l'ordre)
        for (let i = 0; i < depots.length - 1; i++) {
            const lat1 = parseFloat(depots[i].latitude);
            const lng1 = parseFloat(depots[i].longitude);
            const lat2 = parseFloat(depots[i + 1].latitude);
            const lng2 = parseFloat(depots[i + 1].longitude);
            
            let line = L.polyline([[lat1, lng1], [lat2, lng2]], {
                color: '#059669',
                weight: 3,
                opacity: 0.7,
                dashArray: '5, 5'
            });
            
            line.addTo(map);
            lines.push(line);
        }
        
        // Ajuster la vue pour afficher tous les marqueurs
        if (markers.length > 0) {
            map.fitBounds(bounds.pad(0.1));
        }

document.querySelectorAll('.depot-row').forEach(row => {
    row.addEventListener('click', function() {
        // Fait défiler la page jusqu'à la carte
        document.getElementById('map').scrollIntoView({ behavior: 'smooth', block: 'center' });

        const idx = parseInt(this.getAttribute('data-index'));
        if (markers[idx]) {
            map.setView(markers[idx].getLatLng(), 15, { animate: true });
            markers[idx].openPopup();
        }
    });
});
    </script>
</body>
</html>