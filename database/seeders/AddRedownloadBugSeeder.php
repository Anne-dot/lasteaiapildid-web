<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddRedownloadBugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Bug::create([
            'title' => 'Fotode uuesti allalaadimine',
            'problem' => 'Kui olete kogemata kustutanud alla laetud fotode kausta ja soovite fotosid uuesti alla laadida, siis laiendus ei luba neid uuesti alla laadida.',
            'workaround' => 'Kustutage Chrome\'i allalaadimiste ajalugu (chrome://downloads/ -> Clear all). Laiendus kontrollib Chrome\'i allalaadimiste ajalugu ja ei laadi uuesti alla faile, mis on seal juba kirjas.',
            'status' => 'wont_fix',
            'severity' => 'medium',
            'order' => 3,
            'is_active' => true,
        ]);
    }
}
