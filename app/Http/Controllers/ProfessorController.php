<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Professor;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller {

    public function index() {
        $professores = Professor::all();

        return view('professores', [
            'professores' => $professores
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
            'senha.required' => 'A senha deve ser preenchido'
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
            $professor->disciplina_id = $request->input('disciplina_id');
            $professor->save();

            return redirect()->route('professores');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'disciplina_id' => 'required'
        ]);

        if ($validator->fails()) return redirect()->route('professoresnovo')->withErrors($validator)->withInput();
        else {
            $professor = Professor::find($id);
            $professor->nome = $request->input('nome');
            $professor->disciplina_id = $request->input('disciplina_id');
            $professor->save();

            return redirect()->route('professores');
        }
    }

    public function destroy($id) {
        $professor = Professor::find($id);
        $professor->delete();

        return redirect()->route('professores');
    }
}
