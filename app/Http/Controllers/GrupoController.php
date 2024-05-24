<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Grupo;
use App\Models\Disciplina;
use App\Http\Controllers\Controller;

class GrupoController extends Controller {

    public function index() {
        $grupo = new Grupo();
        $grupos = Grupo::paginate(16);
        $disciplinas = Disciplina::all();
        // return $grupos;
        return view('grupo.grupos', [
            'grupo' => $grupo,
            'grupos' => $grupos,
            'disciplinas' => $disciplinas,
        ]);
    }

    public function create() {
        $grupo = new Grupo();
        $disciplinas = Disciplina::all();

        return view('grupo.grupo', [
            'grupo' => $grupo,
            'disciplinas' => $disciplinas,
        ]);
    }

    public function edit($id) {
        $grupo = Grupo::find($id);
        $disciplinas = Disciplina::all();

        return view('grupo.grupo', [
            'grupo' => $grupo,
            'disciplinas' => $disciplinas,
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'nome.required' => 'O campo título deve ser preenchido',
            'disciplina_id.required' => 'O id da disciplina deve ser preenchido'
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'disciplina_id' => 'required'
        ], $messages);

        if ($validator->fails()) return redirect()->route('gruponovo')->withErrors($validator)->withInput();
        else {
            $grupo = new Grupo();
            $grupo->nome = $request->input('nome');
            $grupo->disciplina_id = $request->input('disciplina_id');
            $grupo->save();

            return redirect()->route('grupos');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'disciplina_id' => 'required'
        ]);

        if ($validator->fails()) return redirect()->route('gruposnovo')->withErrors($validator)->withInput();
        else {
            $grupo = Grupo::find($id);
            $grupo->nome = $request->input('nome');
            $grupo->disciplina_id = $request->input('disciplina_id');
            $grupo->save();

            return redirect()->route('grupos');
        }
    }

    public function destroy($id) {
        $grupo = Grupo::find($id);
        $grupo->delete();

        return redirect()->route('grupos');
    }
}
