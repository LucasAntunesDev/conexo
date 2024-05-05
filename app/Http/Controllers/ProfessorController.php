<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Professor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller {

    public function index() {
        $professores = Professor::all();

        return view('professores', [
            'professores' => $professores
        ]);
    }

    public function showProfessor() {
        $usuario = auth()->user();
        $id = $usuario->id;

        $professor = Professor::find($id);
        $disciplinas =  DB::table('disciplinas')->where('professor_id', $id)->first();

        return view('professorPerfil', [
            'professor' => $professor,
            'disciplinas' => $disciplinas
        ]);
    }

    public function create() {
        $professor = new Professor();

        return view('professor', [
            'professor' => $professor
        ]);
    }

    public function edit($id) {
        $professor = Professor::find($id);

        return view('professor', [
            'professor' => $professor
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'nome.required' => 'O campo título deve ser preenchido',
            'login.required' => 'O login deve ser preenchido',
            'senha.required' => 'A senha deve ser preenchida'
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'login' => 'required',
            'senha' => 'required'
        ], $messages);

        if ($validator->fails()) return redirect()->route('professornovo')->withErrors($validator)->withInput();
        else {
            $professor = new Professor();
            $professor->nome = $request->input('nome');
            $professor->login = $request->input('login');
            $professor->senha = $request->input('senha');
            $professor->save();

            return redirect()->route('inicio');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'login' => 'required',
            'senha' => 'required'
        ]);

        if ($validator->fails()) return redirect()->route('professornovo')->withErrors($validator)->withInput();
        else {
            $professor = Professor::find($id);
            $professor->nome = $request->input('nome');
            $professor->login = $request->input('login');
            $professor->senha = $request->input('senha');
            Auth::login($professor);
            $professor->save();

            return redirect()->route('inicio');
        }
    }

    public function destroy($id) {
        $professor = Professor::find($id);
        $professor->delete();

        return redirect()->route('inicio');
    }
}
