<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/diario', 'App\Http\Controllers\JogoController@api');
Route::get('/categorias', 'App\Http\Controllers\JogoController@getCategorias');
Route::get('/palavras', 'App\Http\Controllers\JogoController@getPalavras');

Route::get('/', function () {
    return response()->json([
        'response' => true
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
