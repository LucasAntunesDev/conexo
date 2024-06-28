<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\GrupoDisciplina;
use App\Models\Disciplina;
use App\Models\Grupo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GrupoDisciplinaController extends Controller {

    public function index() {
        $grupos_disciplinas = GrupoDisciplina::paginate(4);

        return view('grupos_disciplinas.grupos_disciplinas', [
            'grupos_disciplinas' => $grupos_disciplinas
        ]);
    }

    public function create() {
        $grupo_disciplina = new GrupoDisciplina();
        $grupos = Grupo::all();
        $disciplinas = Disciplina::all();

        return view('grupos_disciplinas.grupo_disciplina', [
            'grupo_disciplina' => $grupo_disciplina,
            'grupos' => $grupos,
            'disciplinas' => $disciplinas,
        ]);
    }

    public function edit($id) {
        $grupo_disciplina = GrupoDisciplina::find($id);
        $grupos = Grupo::all();

        return view('grupos_disciplinas.grupo_disciplina', [
            'grupo_disciplina' => $grupo_disciplina,
            'grupos' => $grupos,
        ]);
    }

    public function store(Request $request) {
        $messages = [
            'disciplina_id.required' => 'Você deve preencher o campo com alguma disciplina',
            'grupo_id.required' => 'Você deve preencher o campo com algum grupo'
        ];

        $validator = Validator::make($request->all(), [
            'disciplina_id' => 'required|integer',
            'grupo_id' => 'required|integer',
        ], $messages);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $grupo_disciplina = new GrupoDisciplina();
            $grupo_disciplina->disciplina_id = $request->input('disciplina_id');
            $grupo_disciplina->grupo_id = $request->input('grupo_id');
            $grupo_disciplina->save();

            return redirect()->route('grupos');
            return back()->with('success', 'Disciplina salva com sucesso!');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'disciplina_id' => 'required',
            'grupo_id' => 'required'
        ]);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $grupo_disciplina = GrupoDisciplina::find($id);
            $grupo_disciplina->disciplina_id = $request->input('disciplina_id');
            $grupo_disciplina->grupo_id = $request->input('grupo_id');
            $grupo_disciplina->save();

            return redirect()->route('disciplinaform', ['id' =>  $grupo_disciplina->disciplina_id]);
        }
    }

    public function destroy($id) {
        $grupo_disciplina = GrupoDisciplina::find($id);
        $grupo_disciplina->delete();

        return back()->with('remove', 'Disciplina removida com sucesso!');
    }
}
