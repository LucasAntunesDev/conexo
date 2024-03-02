<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Categoria;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller {

    public function index() {
        $categorias = Categoria::all();

        return view('categorias', [
            'categorias' => $categorias
        ]);
    }

    public function create() {
        $categoria = new Categoria();

        return view('categoria', [
            'categoria' => $categoria
        ]);
    }

    public function edit($id) {
        $categoria = Categoria::find($id);

        return view('categoria', [
            'categoria' => $categoria
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

        if ($validator->fails()) return redirect()->route('categorianovo')->withErrors($validator)->withInput();
        else {
            $categoria = new Categoria();
            $categoria->nome = $request->input('nome');
            $categoria->disciplina_id = $request->input('disciplina_id');
            $categoria->save();

            return redirect()->route('categorias');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'disciplina_id' => 'required'
        ]);

        if ($validator->fails()) return redirect()->route('categoriasnovo')->withErrors($validator)->withInput();
        else {
            $categoria = Categoria::find($id);
            $categoria->nome = $request->input('nome');
            $categoria->disciplina_id = $request->input('disciplina_id');
            $categoria->save();

            return redirect()->route('categorias');
        }
    }

    public function destroy($id) {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categorias');
    }
}
