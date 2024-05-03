<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/diario', 'App\Http\Controllers\JogoController@jogo')->name('diario');


Route::prefix('jogos')->group(function () {
    Route::get('/', 'App\Http\Controllers\JogoController@index')->name('jogo');
});

Route::prefix('professores')->group(function () {
    Route::get('/', 'App\Http\Controllers\ProfessorController@index')->name('professores');
    Route::get('novo', 'App\Http\Controllers\ProfessorController@create')->name('professornovo');
    Route::get('{id}', 'App\Http\Controllers\ProfessorController@edit')->name('professorform');
    Route::post('/', 'App\Http\Controllers\ProfessorController@store')->name('professorinsert');
    Route::put('{id}', 'App\Http\Controllers\ProfessorController@update')->name('professorupdate');
    Route::delete('{id}', 'App\Http\Controllers\ProfessorController@destroy')->name('professordelete');
});

Route::prefix('disciplinas')->group(function () {
    Route::get('/', 'App\Http\Controllers\DisciplinaController@index')->name('disciplinas');
    Route::get('novo', 'App\Http\Controllers\DisciplinaController@create')->name('disciplinanovo');
    Route::get('{id}', 'App\Http\Controllers\DisciplinaController@edit')->name('disciplinaform');
    Route::post('/', 'App\Http\Controllers\DisciplinaController@store')->name('disciplinainsert');
    Route::put('{id}', 'App\Http\Controllers\DisciplinaController@update')->name('disciplinaupdate');
    Route::delete('{id}', 'App\Http\Controllers\DisciplinaController@destroy')->name('disciplinadelete');
});

Route::prefix('grupos')->group(function () {
    Route::get('/', 'App\Http\Controllers\GrupoController@index')->name('grupos');
    Route::get('novo', 'App\Http\Controllers\GrupoController@create')->name('gruponovo');
    Route::get('{id}', 'App\Http\Controllers\GrupoController@edit')->name('grupoform');
    Route::post('/', 'App\Http\Controllers\GrupoController@store')->name('grupoinsert');
    Route::put('{id}', 'App\Http\Controllers\GrupoController@update')->name('grupoupdate');
    Route::delete('{id}', 'App\Http\Controllers\GrupoController@destroy')->name('grupodelete');
});

Route::prefix('palavras')->group(function () {
    Route::get('/', 'App\Http\Controllers\PalavraController@index')->name('palavras');
    Route::get('novo', 'App\Http\Controllers\PalavraController@create')->name('palavranovo');
    Route::get('{id}', 'App\Http\Controllers\PalavraController@edit')->name('palavraform');
    Route::post('/', 'App\Http\Controllers\PalavraController@store')->name('palavrainsert');
    Route::put('{id}', 'App\Http\Controllers\PalavraController@update')->name('palavraupdate');
    Route::delete('{id}', 'App\Http\Controllers\PalavraController@destroy')->name('palavradelete');
});