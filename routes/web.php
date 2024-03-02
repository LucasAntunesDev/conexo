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

Route::get('jogo', function () {
    return view('conexo');
});


// Route::prefix('')->group(function () {
//     Route::get('/', 'App\Http\Controllers\CategoryController@index')->name('categorias');
//     Route::get('novo', 'App\Http\Controllers\CategoryController@create')->name('categorianovo');
//     Route::get('{id}', 'App\Http\Controllers\CategoryController@edit')->name('categoriaform');
//     Route::post('/', 'App\Http\Controllers\CategoryController@store')->name('categoriainsert');
//     Route::put('{id}', 'App\Http\Controllers\CategoryController@update')->name('categoriaupdate');
//     Route::delete('{id}', 'App\Http\Controllers\CategoryController@destroy')->name('categoriadelete');
// });
