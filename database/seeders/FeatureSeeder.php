<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'title' => 'Firefox tugi',
                'description' => 'Laienduse versioon Firefox brauseri jaoks, et toetada kõiki kasutajaid.',
                'status' => 'planned',
                'priority' => 'high',
                'order' => 1,
            ],
            [
                'title' => 'Automaatne taaskäivitus krahhide korral',
                'description' => 'Kui Eliis hangub või krahh toimub, laiendus taaskäivitub automaatselt ja jätkab sealt kus pooleli jäi.',
                'status' => 'planned',
                'priority' => 'high',
                'order' => 2,
            ],
            [
                'title' => 'Puudumiste päevade vahele jätmine',
                'description' => 'Võimalus jätta vahele päevad kui laps oli haige või puudus lasteaiast.',
                'status' => 'planned',
                'priority' => 'medium',
                'order' => 3,
            ],
            [
                'title' => 'Nunnu Mode™',
                'description' => 'Muudab Eliisi kasutajaliidese rõõmsamaks - asendab lapse ametliku nime hellitusnimega, lisab värvilisi piirjooni ja südameid.',
                'status' => 'planned',
                'priority' => 'medium',
                'order' => 4,
            ],
            [
                'title' => 'Pilvesalvestuse integratsioon',
                'description' => 'Automaatne üleslaadimine Google Photos, Dropbox, OneDrive või iCloud teenustesse.',
                'status' => 'planned',
                'priority' => 'medium',
                'order' => 5,
            ],
            [
                'title' => 'Päevategevuste allalaadimine',
                'description' => 'Salvestab ka õpetajate kirjutatud päevategevused tekstifailidena samasse kausta piltidega.',
                'status' => 'planned',
                'priority' => 'low',
                'order' => 6,
            ],
            [
                'title' => 'Videote välistamise võimalus',
                'description' => 'Valik laadida alla ainult pildid, jättes videod vahele (säästab andmemahtu).',
                'status' => 'planned',
                'priority' => 'low',
                'order' => 7,
            ],
            [
                'title' => 'Maksesüsteemi integratsioon',
                'description' => 'Püsimaksete tugi alates august 2025.',
                'status' => 'planned',
                'priority' => 'high',
                'order' => 8,
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
