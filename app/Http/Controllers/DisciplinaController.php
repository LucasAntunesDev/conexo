<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Disciplina;
use App\Models\Professor;
use App\Http\Controllers\Controller;

class DisciplinaController extends Controller {

    public function index() {
        $disciplina = new Disciplina();
        $disciplinas = Disciplina::paginate(16);
        $professores = Professor::all();

        return view('disciplinas.disciplinas', [
            'disciplina' => $disciplina,
            'disciplinas' => $disciplinas,
            'professores' => $professores,
        ]);
    }

    public function edit($id) {
        $disciplina = Disciplina::find($id);
        $professores = Professor::all();

        return view('disciplinas.disciplina', [
            'disciplina' => $disciplina,
            'professores' => $professores,
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'nome.required' => 'O campo título deve ser preenchido',
            'professor_id.required' => 'O id da disciplina deve ser preenchido'
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'professor_id' => 'required'
        ], $messages);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $disciplina = new Disciplina();
            $disciplina->nome = $request->input('nome');
            $disciplina->professor_id = $request->input('professor_id');
            $disciplina->save();

            return back();
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'professor_id' => 'required'
        ]);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $disciplina = Disciplina::find($id);
            $disciplina->nome = $request->input('nome');
            $disciplina->professor_id = $request->input('professor_id');
            $disciplina->id = $request->input('id');
            $disciplina->save();

            return redirect()->route('disciplinas')->with('status', 'Palavra editada com sucesso!');
        }
    }

    public function destroy($id) {
        $disciplina = Disciplina::find($id);
        $disciplina->delete();

        return back()->with('delete', 'Disciplina deletada com sucesso!');
    }
}
