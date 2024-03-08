<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Palavra;
use App\Http\Controllers\Controller;

class PalavraController extends Controller {

    public function index() {
        $palavras = Palavra::all();

        return view('palavras', [
            'palavras' => $palavras
        ]);
    }

    public function create() {
        $palavra = new Palavra();

        return view('palavra', [
            'palavra' => $palavra
        ]);
    }

    public function edit($id) {
        $palavra = Palavra::find($id);

        return view('palavra', [
            'palavra' => $palavra
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

        if ($validator->fails()) return redirect()->route('palavranovo')->withErrors($validator)->withInput();
        else {
            $palavra = new Palavra();
            $palavra->nome = $request->input('nome');
            $palavra->disciplina_id = $request->input('disciplina_id');
            $palavra->save();

            return redirect()->route('palavras');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'disciplina_id' => 'required'
        ]);

        if ($validator->fails()) return redirect()->route('palavrasnovo')->withErrors($validator)->withInput();
        else {
            $palavra = Palavra::find($id);
            $palavra->nome = $request->input('nome');
            $palavra->disciplina_id = $request->input('disciplina_id');
            $palavra->save();

            return redirect()->route('palavras');
        }
    }

    public function destroy($id) {
        $palavra = Palavra::find($id);
        $palavra->delete();

        return redirect()->route('palavras');
    }
}
