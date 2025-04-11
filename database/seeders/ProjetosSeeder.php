<?php

namespace Database\Seeders;

use App\Models\Projeto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Projeto::create([
            'NomeProjeto' => 'VetDomus',
            'Imagem' => 'img/VetDomusNotebook.png',
            'Descricao' => 'Projeto feito em Laravel',
        ]);
    }
}
