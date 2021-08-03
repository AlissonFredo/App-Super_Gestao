<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome='Sistema 5G';
        $contato->telefone='(48) 98888-8888';
        $contato->email='contato@sg.com.br';
        $contato->motivo_contato=1;
        $contato->mensagem='Seja bem-vindo ao sistema super gestão';
        $contato->save();
        */

        \App\Models\SiteContato::factory()->count(100)->create();
    }
}