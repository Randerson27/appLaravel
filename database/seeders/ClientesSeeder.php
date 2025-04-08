<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Cliente::create([
            'NomeCliente' => 'Doutor Andrea',
            'Email' => 'andreas@gmail.com',
            'Assunto' => 'Interessado',
            'Mensagem' => 'Tenho interesse, quero marcar uma consultoria.',
        ]);
    }
}
