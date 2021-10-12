<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContatoMotivo;

class PrincipalController extends Controller
{
    public function principal(){
        $motivo_contatos = ContatoMotivo::all();

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}