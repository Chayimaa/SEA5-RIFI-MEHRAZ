<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Depot;
use App\Models\Depots;

class DepotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $depots = [
            [
                'nom' => 'Dépôt Central',
                'adresse' => 'Rue des Jardins, Thaon-les-Vosges',
                'capacite' => 5000
            ],
            [
                'nom' => 'Dépôt Nancy',
                'adresse' => 'Avenue de la Liberté, Nancy',
                'capacite' => 3000
            ],
            [
                'nom' => 'Dépôt Épinal',
                'adresse' => 'Boulevard des Vosges, Épinal',
                'capacite' => 2500
            ],
            [
                'nom' => 'Dépôt Sud',
                'adresse' => 'Route de Mirecourt, Charmes',
                'capacite' => 1800
            ],
            [
                'nom' => 'Dépôt Est',
                'adresse' => 'Rue de la Gare, Lunéville',
                'capacite' => 2200
            ],
            [
                'nom' => 'Dépôt Nord',
                'adresse' => 'Zone Industrielle, Saint-Dié',
                'capacite' => 2700
            ],
        ];

        foreach ($depots as $depot) {
            Depots::create($depot);
        }
    }
}
