<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao)
    {
        echo $metodo_autenticacao.'<br>';

        if($metodo_autenticacao == 'padrao') {
            echo 'verificar o usuario e senha no banco de dados<br>';
        }

        if($metodo_autenticacao == 'idap') {
            echo 'verificar o usuario e senha no AD<br>';
        }

        if(true) {
            return $next($request);
        } else {
            return Response('Acesso negado! Rota exige autenticação');
        }

    }
}
