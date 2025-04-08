<?php

namespace Database\Seeders;

use App\Models\Relatorio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class RelatoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Relatorio::create([
            'TotalProjetos' => '10',
            'AnosExperiencia' => '3',
        ]);
    }
}
