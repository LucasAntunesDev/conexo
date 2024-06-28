<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Palavra;
use App\Http\Resources\PalavraResource;
use App\Models\GrupoPalavra;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Grupo;

class PalavraController extends Controller {

    public function __construct(protected Palavra $palavrasRepository) {
    }

    public function index() {
        $palavras = Palavra::paginate(24);
        $grupos_palavras = GrupoPalavra::all();

        return view('palavras.palavras', [
            'palavras' => $palavras,
            'grupos_palavras' => $grupos_palavras
        ]);
    }

    public function api() {
        $palavras = $this->palavrasRepository->paginate(24);
        return PalavraResource::collection($palavras);
    }

    public function edit($id,) {
        $palavra = Palavra::find($id);
        $grupos_palavras = DB::table('grupos_palavras')->where('palavra_id', $id)->get();

        return view('palavras.palavra', [
            'palavra' => $palavra,
            'grupos_palavras' => $grupos_palavras,
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'nome.required' => 'Você deve preencher o campo com alguma palavra'
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
        ], $messages);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $palavra = new Palavra();
            $palavra->nome = $request->input('nome');
            $palavra->save();

            return back()->with('success', 'Palavra salva com sucesso!');
        }
    }

    public function update($id, Request $request) {

        $messages = [
            'nome.required' => 'Você deve preencher o campo com alguma palavra'
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required|max:255',
        ], $messages);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $palavra = Palavra::find($id);
            $palavra->nome = $request->input('nome');
            $palavra->save();

            return back()->with('status', 'Palavra editada com sucesso!');
        }
    }

    public function destroy($id) {
        $palavra = Palavra::find($id);
        $palavra->delete();

        return back()->with('delete', 'Palavra deletada com sucesso!');
    }
}
