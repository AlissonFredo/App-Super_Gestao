<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\ContatoMotivo;

class ContatoController extends Controller
{
    public function contato(Request $request){
        $motivo_contatos = ContatoMotivo::all();

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){

        //realizar validação dos dados do formulário recebidos no request
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        //SiteContato::create($request->all());
    }
}