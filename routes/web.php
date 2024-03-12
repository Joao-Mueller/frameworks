<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/exemplo', function () {
    //return view('exemplo');
//});

Route::get('/alunos', [App\Http\Controllers\AlunoController::class, 'listar'])
    ->name('alunos.listar');
    
Route::get('/alunos/{id}', [App\Http\Controllers\AlunoController::class, 'listarId']);

Route::get('/novoAluno', [App\Http\Controllers\AlunoController::class, 'criar']);

Route::post('updateAluno', [App\Http\Controllers\AlunoController::class, 'update'])
    ->name('aluno.update');

Route::post('salvarAluno', [App\Http\Controllers\AlunoController::class, 'store'])
    ->name('alunos.salvar');