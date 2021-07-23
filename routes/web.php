<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return 'app super gestao raiz';
});


Route::get('/sobre', function () {
    return 'app super gestao sobre';
});

Route::get('/contato', function () {
    return 'app super gestao contato';
});
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::fallback(function(){
    echo 'A rota não existe, <a href="'.route('site.index').'">Clique aqui</a> para ir a pagina inicial';
});