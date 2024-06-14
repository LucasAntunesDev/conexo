<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Grupo;
use App\Models\Disciplina;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GrupoController extends Controller
{

    public function index() {
        $grupo = new Grupo();
        $grupos = Grupo::paginate(16);
        $disciplinas = Disciplina::all();

        return view('grupos.grupos', [
            'grupo' => $grupo,
            'grupos' => $grupos,
            'disciplinas' => $disciplinas,
        ]);
    }

    public function edit($id) {
        $grupo = Grupo::find($id);
        $disciplinas = DB::table('grupos_disciplinas')
            ->join('disciplinas', 'grupos_disciplinas.disciplina_id', '=', 'disciplinas.id')
            ->select('disciplinas.nome')
            ->where('grupos_disciplinas.grupo_id', '=', $id)
            ->get();

        return view('grupos.grupo', [
            'grupo' => $grupo,
            'disciplinas' => $disciplinas,
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'nome.required' => 'O campo título deve ser preenchido',
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
        ], $messages);

        if ($validator->fails())
            return back()->withErrors($validator)->withInput();
        else {
            $grupo = new Grupo();
            $grupo->nome = $request->input('nome');

            $grupo->save();
            return back();
        }
    }

    public function update($id, Request $request) {

        $messages = [
            'nome.required' => 'O campo grupo deve ser preenchido',
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
        ], $messages);

        if ($validator->fails())
            return back()->withErrors($validator)->withInput();
        else {
            $grupo = Grupo::find($id);
            $grupo->nome = $request->input('nome');

            $grupo->save();
            return back();
        }
    }

    public function destroy($id) {
        $grupo = Grupo::find($id);
        $grupo->delete();

        return back();
    }
}