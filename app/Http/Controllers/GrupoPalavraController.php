<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\GrupoPalavra;
use App\Models\Palavra;
use App\Models\Grupo;
use App\Http\Controllers\Controller;

class GrupoPalavraController extends Controller {

    public function index() {
        $grupos_palavras = GrupoPalavra::paginate(4);

        return view('grupo.grupos_palavras', [
            'grupos_palavras' => $grupos_palavras
        ]);
    }

    public function create() {
        $grupo_palavra = new GrupoPalavra();
        $grupos = Grupo::all();
        $palavras = Palavra::all();

        return view('grupo_palavra', [
            'grupo_palavra' => $grupo_palavra,
            'grupos' => $grupos,
            'palavras' => $palavras,
        ]);
    }

    public function edit($id) {
        $grupo_palavra = GrupoPalavra::find($id);
        $grupos = Grupo::all();
        
        return view('grupo_palavra', [
            'grupo_palavra' => $grupo_palavra,
            'grupos' => $grupos,
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'palavra_id.required' => 'Você deve preencher o campo com alguma palavra',
            'grupo_id.required' => 'Você deve preencher o campo com algum grupo'
        ];

        $validator = Validator::make($request->all(), [
            'palavra_id' => 'required',
            'grupo_id' => 'required',
        ], $messages);

        if ($validator->fails()) return redirect()->route('palavranovo')->withErrors($validator)->withInput();
        else {
            $grupo_palavra = new GrupoPalavra();
            $grupo_palavra->id = $request->input('id');
            $grupo_palavra->palavra_id = $request->input('palavra_id');
            $grupo_palavra->grupo_id = $request->input('grupo_id');
            $grupo_palavra->save();

            return back()->with('success', 'Palavra salva com sucesso!');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'palavra_id' => 'required',
            'grupo_id' => 'required'
        ]);

        if ($validator->fails()) return redirect()->route('palavras')->withErrors($validator)->withInput();
        else {
            $grupo_palavra = GrupoPalavra::find($id);
            $grupo_palavra->palavra_id = $request->input('palavra_id');
            $grupo_palavra->grupo_id = $request->input('grupo_id');
            $grupo_palavra->save();

            return redirect()->route('palavraform', ['id' =>  $grupo_palavra->palavra_id]);
        }
    }

    public function destroy($id) {
        $grupo_palavra = GrupoPalavra::find($id);
        $grupo_palavra->delete();

        return redirect()->route('palavras');
    }
}
