<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jogo', 'App\Http\Controllers\JogoController@api');

Route::get('/professores', 'App\Http\Controllers\ProfessorController@api')->name('professores');

Route::get('/grupos', 'App\Http\Controllers\JogoController@getGrupos');

Route::get('/palavras', 'App\Http\Controllers\PalavraController@api');

Route::get('/', function () {
    return response()->json([
        'response' => true
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
