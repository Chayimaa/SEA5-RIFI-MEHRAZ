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
            ['nom' => 'Jardins de Cocagne', 'capacite' => 100, 'adresse' => 'Prairie Claudel', 'code_postal' => '88150', 'ville' => 'Thaon-les-Vosges', 'longitude' => 6.427672, 'latitude' => 48.2531016],
            ['nom' => 'Asso Étudiant Universitaire', 'capacite' => 20, 'adresse' => '9 rue de la Louvière', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.4531588, 'latitude' => 48.1723212],
            ['nom' => 'Conseil Départemental des Vosges', 'capacite' => 20, 'adresse' => '8 rue de la Préfecture', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.4445154, 'latitude' => 48.1721724],
            ['nom' => 'Asso Rhyzome', 'capacite' => 20, 'adresse' => '15 rue des Jardiniers', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.452224, 'latitude' => 48.1706099],
            ['nom' => 'Pharmacie Saint Nabord', 'capacite' => 20, 'adresse' => '24 rue du Gal de Gaulle', 'code_postal' => '88200', 'ville' => 'Saint-Nabord', 'longitude' => 6.5807814, 'latitude' => 48.0510352],
            ['nom' => 'Denninger', 'capacite' => 20, 'adresse' => '36 bis rue de la Plaine', 'code_postal' => '88190', 'ville' => 'Golbey', 'longitude' => 6.4426982, 'latitude' => 48.1929337],
            ['nom' => '3e Rive (Café Associatif)', 'capacite' => 20, 'adresse' => '15 rue du Maréchal Lyautey', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.4457306, 'latitude' => 48.177777],
            ['nom' => 'Crédit Agricole', 'capacite' => 20, 'adresse' => 'Allée des Érables', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.454908, 'latitude' => 48.203990],
            ['nom' => 'Centre Léo Lagrange', 'capacite' => 60, 'adresse' => '6 av. Salvador Allende', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.4599403, 'latitude' => 48.1938105],
            ['nom' => 'Boulassel Docelles', 'capacite' => 20, 'adresse' => '1 rue Moncey', 'code_postal' => '88460', 'ville' => 'Docelles', 'longitude' => 6.6162166, 'latitude' => 48.1460719],
            ['nom' => 'Ligue de l’enseignement', 'capacite' => 40, 'adresse' => '15 rue Général de Reffye', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.4323215, 'latitude' => 48.1819469],
            ['nom' => 'Garage Renault - Station Service', 'capacite' => 20, 'adresse' => '664 rue de la Gare', 'code_postal' => '88550', 'ville' => 'Pouxeux', 'longitude' => 6.5760129, 'latitude' => 48.1051197],
            ['nom' => 'Adinolfi', 'capacite' => 40, 'adresse' => '7 allée des Primevères', 'code_postal' => '88390', 'ville' => 'Les Forges', 'longitude' => 6.397633, 'latitude' => 48.171791],
            ['nom' => 'Lecompte François', 'capacite' => 40, 'adresse' => '24 route du Noirpré', 'code_postal' => '88530', 'ville' => 'Le Tholy', 'longitude' => 6.7477787, 'latitude' => 48.0812967],
            ['nom' => 'Papeterie Norske Skog', 'capacite' => 20, 'adresse' => 'ZI Route Charles Pellerin', 'code_postal' => '88190', 'ville' => 'Golbey', 'longitude' => 6.423976, 'latitude' => 48.208795],
            ['nom' => 'Botanic', 'capacite' => 20, 'adresse' => '9 av. des Terres St Jean', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.4692286, 'latitude' => 48.1891998],
            ['nom' => 'Pro & Cie', 'capacite' => 40, 'adresse' => '7 rue de la République', 'code_postal' => '88400', 'ville' => 'Gérardmer', 'longitude' => 6.877433, 'latitude' => 48.074172],
            ['nom' => 'Mme Pierot Charmes', 'capacite' => 40, 'adresse' => '15 rue Ste Barbe', 'code_postal' => '88130', 'ville' => 'Charmes', 'longitude' => 6.2951122, 'latitude' => 48.3777043],
            ['nom' => 'DVIS Epinal', 'capacite' => 20, 'adresse' => '1 Rue de la Préfecture', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.44875, 'latitude' => 48.172438],
            ['nom' => 'Peridon', 'capacite' => 20, 'adresse' => '7 rue du Savron', 'code_postal' => '88220', 'ville' => 'Raon-aux-Bois', 'longitude' => 6.5036466, 'latitude' => 48.0504027],
            ['nom' => 'Chambre d’Agriculture', 'capacite' => 20, 'adresse' => '17 rue André Vitu', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.465403, 'latitude' => 48.1775685],
            ['nom' => 'Biocoop', 'capacite' => 20, 'adresse' => '7 rue du Boudiou', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.447245, 'latitude' => 48.174228],
            ['nom' => 'Moustaches Bikes', 'capacite' => 20, 'adresse' => '5 rue du Ruisseau', 'code_postal' => '88150', 'ville' => 'Thaon-les-Vosges', 'longitude' => 6.4005773, 'latitude' => 48.2576491],
            ['nom' => 'Vosgelis Remiremont', 'capacite' => 20, 'adresse' => '4 place de l’Abbaye', 'code_postal' => '88200', 'ville' => 'Remiremont', 'longitude' => 6.592068, 'latitude' => 48.015964],
            ['nom' => 'Église Saint Antoine', 'capacite' => 60, 'adresse' => '12 rue Armand Colle', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.4489619, 'latitude' => 48.1604568],
            ['nom' => 'Maison de l’Environnement', 'capacite' => 20, 'adresse' => '12 rue Raymond Poincaré', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.449693, 'latitude' => 48.175374],
            ['nom' => 'Vosgelis', 'capacite' => 20, 'adresse' => '8 quai Barbier', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.445190, 'latitude' => 48.171198],
            ['nom' => 'Association GACI', 'capacite' => 20, 'adresse' => '26 rue de la Joncherie', 'code_postal' => '88200', 'ville' => 'Remiremont', 'longitude' => 6.5934293, 'latitude' => 48.0189339],
            ['nom' => 'Brico Marché', 'capacite' => 20, 'adresse' => '2 rue de Fraisne', 'code_postal' => '88600', 'ville' => 'Bruyères', 'longitude' => 6.7196903, 'latitude' => 48.2050495],
            ['nom' => 'Office du tourisme', 'capacite' => 20, 'adresse' => '6 place C. Poncelet', 'code_postal' => '88200', 'ville' => 'Remiremont', 'longitude' => 6.5917178, 'latitude' => 48.0159918],
            ['nom' => 'Point Vert Mafra', 'capacite' => 20, 'adresse' => '5 rue des Résistants Zac Barbazan', 'code_postal' => '88600', 'ville' => 'Bruyères', 'longitude' => 6.7208371, 'latitude' => 48.2032056],
            ['nom' => 'La Quarterelle', 'capacite' => 20, 'adresse' => '3 rue Carterelle', 'code_postal' => '88200', 'ville' => 'Épinal', 'longitude' => 6.7208371, 'latitude' => 48.2032056],
            ['nom' => 'Léo Lagrange', 'capacite' => 20, 'adresse' => 'Chemin du Tambour Major', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.7208371, 'latitude' => 48.2032056],
            ['nom' => 'Bouvier Emmanuel', 'capacite' => 20, 'adresse' => '557 rue du Chêne', 'code_postal' => '88220', 'ville' => 'Hadol', 'longitude' => 6.484004, 'latitude' => 48.108499],
            ['nom' => 'APF - Local extérieur – ESAT', 'capacite' => 20, 'adresse' => 'rue de la papeterie', 'code_postal' => '88000', 'ville' => 'Dinozé', 'longitude' => 6.4738942, 'latitude' => 48.1383687],
            ['nom' => 'La tête à Toto', 'capacite' => 20, 'adresse' => '26 quai des Bons Enfants', 'code_postal' => '88000', 'ville' => 'Épinal', 'longitude' => 6.4409549, 'latitude' => 48.1748623],
            ['nom' => 'UIMM', 'capacite' => 20, 'adresse' => 'Label Initiative', 'code_postal' => '88150', 'ville' => 'Thaon-les-Vosges', 'longitude' => 6.4409549, 'latitude' => 48.1748623],
            ['nom' => 'Résidence du Monsey', 'capacite' => 20, 'adresse' => 'Ruelle de Monsey', 'code_postal' => '88450', 'ville' => 'Vincey', 'longitude' => 6.330850, 'latitude' => 48.337907],
            ['nom' => 'Complexe Sportif', 'capacite' => 40, 'adresse' => 'Bld Georges Clemenceau', 'code_postal' => '88130', 'ville' => 'Charmes', 'longitude' => 6.298452, 'latitude' => 48.375298],
            ['nom' => 'Fives', 'capacite' => 20, 'adresse' => '2 rue des Amériques', 'code_postal' => '88190', 'ville' => 'Golbey', 'longitude' => 6.428831, 'latitude' => 48.200150],
            ['nom' => 'Nomexy Secours Catholique', 'capacite' => 20, 'adresse' => '1 place de Verdun', 'code_postal' => '88440', 'ville' => 'Nomexy', 'longitude' => 6.386527, 'latitude' => 48.305704],
        ];

        foreach ($depots as $depot) {
            Depots::create($depot);
        }
    }
}
