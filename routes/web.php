<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return 'Olá, seja bem-vindo!';
});
Route::get('/sobre-nos', function () {
    return 'Sobre nós';
});

Route::get('/contato', function () {
    return 'Contato';
});
*/

Route::get('/',[PrincipalController::class , 'principal']);
Route::get('/sobre-nos', [SobreNosController::class , 'sobreNos']);
Route::get('/contato', [ContatoController::class, 'contato']);

// Passando parametros

Route::get(
    '/contato/{nome}/{categoria}/{assunto}/{mensagem}',
    function(string $nome, string $categoria, string $assunto, string $mensagem) {

    echo "<h1>Olá $nome</h3><br/>";
    echo "<h5>Informações do Contato</h5><br/>";
    echo "Categoria: $categoria<br/>";
    echo "Assunto: $assunto<br/>";
    echo "Mensagem: $mensagem";

    }
);

