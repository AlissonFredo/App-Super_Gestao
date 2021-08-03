<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
        /*
        *** dd(); apresenta um array na tela e finaliza a aplicação como se fosse um die; ***
        dd($request);
        */

        /*
        *** metodo all() recupera todos os atributos do array associativo ***
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        */

        /*
        *** metodo input() apresenta somente o atributo desejado do array associativo ***
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('nome');
        */

        return view('site.contato');
    }
}