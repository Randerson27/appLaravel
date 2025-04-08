<?php

namespace Database\Seeders;

use App\Models\Avaliacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class AvaliacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Avaliacao::create([
            'NomeCliente' => 'Julia Dentista',
            'NomeEmpresa' => 'Consultorio JuliaDental',
            'Email' => 'julianegocios@hotmail.com',
            'AvaliacaoTexto' => 'Muito competente!',
        ]);
    }
}
