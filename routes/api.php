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

Route::get('/teste', 'App\Http\Controllers\JogoController@create');

Route::get('/grupos', 'App\Http\Controllers\JogoController@getGrupos');
Route::get('/palavras', 'App\Http\Controllers\JogoController@getPalavras');

Route::get('/', function () {
    return response()->json([
        'response' => true
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
