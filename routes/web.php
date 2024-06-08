<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoDisciplinaController;
use App\Http\Controllers\GrupoPalavraController;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\PalavraController;
use App\Http\Controllers\ProfessorController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');


Route::get('/jogo', [JogoController::class, 'jogo'])->name('jogo');
Route::prefix('jogos')->group(function () {
    Route::get('/', [JogoController::class, 'index'])->name('jogos');
});

Route::get('login', [AuthController::class ,'login'])->name('login');
Route::post('login', [AuthController::class ,'fazerLogin'])->name('fazerLogin');
Route::get('/logout', [AuthController::class ,'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::prefix('professores')->group(function () {
        Route::get('{id}', [ProfessorController::class, 'edit'])->name('professorform');
        Route::post('/', [ProfessorController::class, 'store'])->name('professorinsert');
        Route::put('{id}', [ProfessorController::class, 'update'])->name('professorupdate');
        Route::delete('{id}', [ProfessorController::class, 'destroy'])->name('professordelete');
    });

    Route::prefix('disciplinas')->group(function () {
        Route::get('/', [DisciplinaController::class, 'index'])->name('disciplinas');
        Route::get('{id}', [DisciplinaController::class, 'edit'])->name('disciplinaform');
        Route::post('/', [DisciplinaController::class, 'store'])->name('disciplinainsert');
        Route::put('{id}', [DisciplinaController::class, 'update'])->name('disciplinaupdate');
        Route::delete('{id}', [DisciplinaController::class, 'destroy'])->name('disciplinadelete');
    });

    Route::prefix('grupos')->group(function () {
        Route::get('/', [GrupoController::class, 'index'])->name('grupos');
        Route::get('{id}', [GrupoController::class, 'edit'])->name('grupoform');
        Route::post('/', [GrupoController::class, 'store'])->name('grupoinsert');
        Route::put('{id}', [GrupoController::class, 'update'])->name('grupoupdate');
        Route::delete('{id}', [GrupoController::class, 'destroy'])->name('grupodelete');
    });

    Route::prefix('palavras')->group(function () {
        Route::get('/', [PalavraController::class, 'index'])->name('palavras');
        Route::get('{id}', [PalavraController::class, 'edit'])->name('palavraform');
        Route::post('/', [PalavraController::class, 'store'])->name('palavrainsert');
        Route::put('{id}', [PalavraController::class, 'update'])->name('palavraupdate');
        Route::delete('{id}', [PalavraController::class, 'destroy'])->name('palavradelete');
    });

    Route::prefix('grupospalavras')->group(function () {
        Route::get('/', [GrupoPalavraController::class, 'index'])->name('grupospalavras');
        Route::get('novo', [GrupoPalavraController::class, 'create'])->name('grupopalavranovo');
        Route::get('{id}', [GrupoPalavraController::class, 'edit'])->name('grupopalavraform');
        Route::post('/', [GrupoPalavraController::class, 'store'])->name('grupopalavrainsert');
        Route::put('{id}', [GrupoPalavraController::class, 'update'])->name('grupopalavraupdate');
        Route::delete('{id}', [GrupoPalavraController::class, 'destroy'])->name('grupopalavradelete');
    });

    Route::prefix('gruposdisciplinas')->group(function () {
        Route::get('/', [GrupoDisciplinaController::class, 'index'])->name('gruposdisciplinas');
        Route::get('novo', [GrupoDisciplinaController::class, 'create'])->name('grupodisciplinanovo');
        Route::get('{id}', [GrupoDisciplinaController::class, 'edit'])->name('grupodisciplinaform');
        Route::post('/', [GrupoDisciplinaController::class, 'store'])->name('grupodisciplinainsert');
        Route::put('{id}', [GrupoDisciplinaController::class, 'update'])->name('grupodisciplinaupdate');
        Route::delete('{id}', [GrupoDisciplinaController::class, 'destroy'])->name('grupodisciplinadelete');
    });

    Route::prefix('jogo')->group(function () {
        Route::get('{id}', [JogoController::class, 'edit'])->name('jogoform');
        Route::post('/', [JogoController::class, 'store'])->name('jogoinsert');
        Route::put('{id}', [JogoController::class, 'update'])->name('jogoupdate');
        Route::delete('{id}', [JogoController::class, 'destroy'])->name('jogodelete');
    });
});
