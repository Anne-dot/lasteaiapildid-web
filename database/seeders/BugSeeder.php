<?php

namespace Database\Seeders;

use App\Models\Bug;
use Illuminate\Database\Seeder;

class BugSeeder extends Seeder
{
    public function run(): void
    {
        $bugs = [
            [
                'title' => 'Mitme lapse puhul salvestatakse pildid vale lapse kausta',
                'problem' => 'Probleem on selles, et kui Eliisis liikuda mitme lapse vahel ilma lehte värskendamata, ei saa laiendus järgmise lapse nime tuvastada ning pildid salvestuvad esimese lapse kausta.',
                'workaround' => 'ALATI värskendage lehte (F5), kui vahetate Eliisis last.',
                'status' => 'working',
                'severity' => 'high',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Märtsi kuupäevade vale tuvastamine',
                'problem' => 'Märtsi kuupäevad võivad mõnikord valesti tuvastuda (nt 08.03 → 03.08).',
                'workaround' => 'Kontrollige allalaaditud piltide kuupäevi ja vajadusel teisaldage õigesse kausta.',
                'status' => 'fixed',
                'severity' => 'medium',
                'order' => 2,
                'is_active' => false,
            ],
            [
                'title' => 'Eliis võib aeglustuda suurte vahemike puhul',
                'problem' => 'Rohkem kui 3 kuu piltide allalaadimisel võib Eliis muutuda aeglaseks või hanguda.',
                'workaround' => 'Laadige pildid alla väiksemate perioodide kaupa (1-2 kuud korraga).',
                'status' => 'wontfix',
                'severity' => 'low',
                'order' => 3,
                'is_active' => false,
            ],
            [
                'title' => 'Laiendus jääb kinni, kui viimane element on video',
                'problem' => 'Kui päeva viimane element on video, siis laiendus jääb kinni ega suuda järgmise kuupäeva juurde edasi liikuda.',
                'workaround' => 'Sulgege Eliisi leht/aken ja käivitage piltide allalaadimine uuesti. Allalaadimiste ajalugu mäletab juba allalaetud kuupäevi ja jätkab sealt, kus pooleli jäi. Soovitame allalaadimise ajal aeg-ajalt kontrollida, kas laiendus edeneb.',
                'status' => 'working',
                'severity' => 'high',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Fotode uuesti allalaadimine',
                'problem' => 'Kui olete kogemata kustutanud alla laetud fotode kausta ja soovite fotosid uuesti alla laadida, siis laiendus ei luba neid uuesti alla laadida.',
                'workaround' => 'Kustutage Chrome\'i allalaadimiste ajalugu (chrome://downloads/ -> Clear all). Laiendus kontrollib Chrome\'i allalaadimiste ajalugu ja ei laadi uuesti alla faile, mis on seal juba kirjas. NB! Märkige kindlasti üles kuupäev või kuupäevade vahemik, mida soovite uuesti alla laadida, sest laiendus ei mäleta enam ühtegi allalaaditud kuupäeva.',
                'status' => 'wont_fix',
                'severity' => 'medium',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($bugs as $bug) {
            Bug::create($bug);
        }
    }
}