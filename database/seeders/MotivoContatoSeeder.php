<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContatoMotivo;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContatoMotivo::create(['motivo_contato' => 'Dúvida']);
        ContatoMotivo::create(['motivo_contato' => 'Elogio']);
        ContatoMotivo::create(['motivo_contato' => 'Reclamação']);
    }
}
