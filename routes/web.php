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
});

Route::get('diario', function () {
    return view('conexo');
})->name('diario');

Route::prefix('jogos')->group(function () {
    // Route::get('/', 'App\Http\Controllers\JogoController@index')->name('jogos');
    Route::get('', 'App\Http\Controllers\JogoController@storeCategoriasSorteadas')->name('jogos');
    // Route::get('{id}', 'App\Http\Controllers\ProfessorController@edit')->name('professorform');
    // Route::post('/', 'App\Http\Controllers\ProfessorController@store')->name('professorinsert');
    // Route::put('{id}', 'App\Http\Controllers\ProfessorController@update')->name('professorupdate');
    // Route::delete('{id}', 'App\Http\Controllers\ProfessorController@destroy')->name('professordelete');
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

Route::prefix('categorias')->group(function () {
    Route::get('/', 'App\Http\Controllers\CategoriaController@index')->name('categorias');
    Route::get('novo', 'App\Http\Controllers\CategoriaController@create')->name('categorianovo');
    Route::get('{id}', 'App\Http\Controllers\CategoriaController@edit')->name('categoriaform');
    Route::post('/', 'App\Http\Controllers\CategoriaController@store')->name('categoriainsert');
    Route::put('{id}', 'App\Http\Controllers\CategoriaController@update')->name('categoriaupdate');
    Route::delete('{id}', 'App\Http\Controllers\CategoriaController@destroy')->name('categoriadelete');
});

// Route::get('/categorias', function () {
//     return view('categorias');
// });

Route::prefix('palavras')->group(function () {
    Route::get('/', 'App\Http\Controllers\PalavraController@index')->name('palavras');
    Route::get('novo', 'App\Http\Controllers\PalavraController@create')->name('palavranovo');
    Route::get('{id}', 'App\Http\Controllers\PalavraController@edit')->name('palavraform');
    Route::post('/', 'App\Http\Controllers\PalavraController@store')->name('palavrainsert');
    Route::put('{id}', 'App\Http\Controllers\PalavraController@update')->name('palavraupdate');
    Route::delete('{id}', 'App\Http\Controllers\PalavraController@destroy')->name('palavradelete');
});

Route::prefix('categorias_palavras')->group(function () {
    Route::get('/', 'App\Http\Controllers\CategoriaPalavraController@index')->name('categorias_palavras');
    Route::get('novo', 'App\Http\Controllers\CategoriaPalavraController@create')->name('categoria_palavranovo');
    Route::get('{id}', 'App\Http\Controllers\CategoriaPalavraController@edit')->name('categoria_palavraform');
    Route::post('/', 'App\Http\Controllers\CategoriaPalavraController@store')->name('categoria_palavrainsert');
    Route::put('{id}', 'App\Http\Controllers\CategoriaPalavraController@update')->name('categoria_palavraupdate');
    Route::delete('{id}', 'App\Http\Controllers\CategoriaPalavraController@destroy')->name('categoria_palavradelete');
});

// Route::get('conexo', '@JogoController')->name('jogo');


// Route::prefix('')->group(function () {
//     Route::get('/', 'App\Http\Controllers\CategoryController@index')->name('categorias');
//     Route::get('novo', 'App\Http\Controllers\CategoryController@create')->name('categorianovo');
//     Route::get('{id}', 'App\Http\Controllers\CategoryController@edit')->name('categoriaform');
//     Route::post('/', 'App\Http\Controllers\CategoryController@store')->name('categoriainsert');
//     Route::put('{id}', 'App\Http\Controllers\CategoryController@update')->name('categoriaupdate');
//     Route::delete('{id}', 'App\Http\Controllers\CategoryController@destroy')->name('categoriadelete');
// });
