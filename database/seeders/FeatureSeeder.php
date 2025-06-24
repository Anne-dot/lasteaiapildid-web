<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            // Existing features
            [
                'title' => 'Ühe klikiga piltide allalaadimine',
                'description' => 'Kõik valitud perioodi pildid laetakse alla ühe nupuvajutusega.',
                'status' => 'existing',
                'priority' => 'high',
                'order' => 0,
                'is_active' => true,
            ],
            [
                'title' => 'Piltide kaustadesse organiseerimine',
                'description' => "Downloads/
└── Lapse_Nimi/
    └── 2025/
        ├── 01_jaanuar/
        │   ├── 2025-01-15/
        │   │   ├── pilt1.jpg
        │   │   ├── pilt2.jpg
        │   │   └── pilt3.jpg
        │   ├── 2025-01-16/
        │   │   ├── pilt1.jpg
        │   │   └── pilt2.jpg
        │   └── 2025-01-17/
        │       └── pilt1.jpg
        └── 02_veebruar/
            ├── 2025-02-03/
            │   ├── pilt1.jpg
            │   └── pilt2.jpg
            └── 2025-02-04/
                └── pilt1.jpg",
                'status' => 'existing',
                'priority' => 'high',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Perioodi valimine',
                'description' => 'Saate valida kuupäevavahemiku ja laadida alla ainult soovitud perioodi pildid.',
                'status' => 'existing',
                'priority' => 'high',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => '100% privaatne',
                'description' => 'Kõik toimub teie arvutis. Pildid ei lähe kunagi läbi meie serverite.',
                'status' => 'existing',
                'priority' => 'high',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Allalaadimiste ajalugu',
                'description' => 'Laiendus jätab meelde, millised kuupäevad on juba alla laetud ja jätab need automaatselt järgmistel kordadel vahele. NB! Kui kustutate brauseri allalaadimiste ajaloo, kaotab laiendus info varasemalt allalaetud kuupäevade kohta.',
                'status' => 'existing',
                'priority' => 'high',
                'order' => 4,
                'is_active' => true,
            ],
            // Planned features
            [
                'title' => 'Firefox tugi',
                'description' => 'Laienduse versioon Firefox brauseri jaoks, et toetada kõiki kasutajaid.',
                'status' => 'planned',
                'priority' => 'high',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Automaatne taaskäivitus krahhide korral',
                'description' => 'Kui Eliis hangub või krahh toimub, laiendus taaskäivitub automaatselt ja jätkab sealt kus pooleli jäi.',
                'status' => 'planned',
                'priority' => 'high',
                'order' => 2,
                'is_active' => false,
            ],
            [
                'title' => 'Puudumiste päevade vahele jätmine',
                'description' => 'Võimalus jätta vahele päevad kui laps oli haige või puudus lasteaiast.',
                'status' => 'planned',
                'priority' => 'medium',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Nunnu Mode™',
                'description' => 'Muudab Eliisi kasutajaliidese rõõmsamaks - asendab lapse ametliku nime hellitusnimega, lisab värvilisi piirjooni ja südameid.',
                'status' => 'planned',
                'priority' => 'medium',
                'order' => 4,
                'is_active' => false,
            ],
            [
                'title' => 'Pilvesalvestuse integratsioon',
                'description' => 'Automaatne üleslaadimine Google Photos, Dropbox, OneDrive või iCloud teenustesse.',
                'status' => 'planned',
                'priority' => 'medium',
                'order' => 5,
                'is_active' => false,
            ],
            [
                'title' => 'Päevategevuste salvestamine',
                'description' => 'Õpetajate kirjutatud päevategevuste kirjeldused salvestatakse tekstifailina samasse kuupäeva kausta piltidega.',
                'status' => 'planned',
                'priority' => 'medium',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'Videote allalaadimine',
                'description' => 'Lisaks piltidele laetakse alla ka videod.',
                'status' => 'planned',
                'priority' => 'high',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Maksesüsteemi integratsioon',
                'description' => 'Püsimaksete tugi alates august 2025.',
                'status' => 'planned',
                'priority' => 'high',
                'order' => 8,
                'is_active' => false,
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}