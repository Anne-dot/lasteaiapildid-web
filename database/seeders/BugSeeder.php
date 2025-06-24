<?php

namespace Database\Seeders;

use App\Models\Bug;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bugs = [
            [
                'title' => 'Laste vahel vahetamisel salvestatakse pildid valesse kausta',
                'problem' => 'Kui vahetate laste vahel ilma lehte värskendamata, võivad järgmise lapse pildid salvestuda eelmise lapse kausta.',
                'workaround' => 'Vajutage F5 või värskendage lehte enne teise lapse piltide allalaadimist.',
                'status' => 'active',
                'severity' => 'high',
                'order' => 1,
            ],
            [
                'title' => 'Märtsi kuupäevade vale tuvastamine',
                'problem' => 'Märtsi kuupäevad võivad mõnikord valesti tuvastuda (nt 08.03 → 03.08).',
                'workaround' => 'Kontrollige allalaaditud piltide kuupäevi ja vajadusel teisaldage õigesse kausta.',
                'status' => 'fixed',
                'severity' => 'medium',
                'order' => 2,
            ],
            [
                'title' => 'Eliis võib aeglustuda suurte vahemike puhul',
                'problem' => 'Rohkem kui 3 kuu piltide allalaadimisel võib Eliis muutuda aeglaseks või hanguda.',
                'workaround' => 'Laadige pildid alla väiksemate perioodide kaupa (1-2 kuud korraga).',
                'status' => 'wontfix',
                'severity' => 'low',
                'order' => 3,
            ],
        ];

        foreach ($bugs as $bug) {
            Bug::create($bug);
        }
    }
}
