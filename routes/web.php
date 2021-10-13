<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/login', function(){return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::middleware('autenticacao')->get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::middleware('autenticacao')->get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::middleware('autenticacao')->get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::fallback(function(){
    echo 'A rota não existe, <a href="'.route('site.index').'">Clique aqui</a> para ir a pagina inicial';
});