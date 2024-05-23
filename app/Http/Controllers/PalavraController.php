<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Palavra;
use App\Http\Resources\PalavraResource;
// use App\Models\GrupoPalavra;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PalavraController extends Controller {

    public function __construct(protected Palavra $palavrasRepository){}

    public function index() {
        $palavras = Palavra::paginate(24);

        return view('palavra.palavras', [
            'palavras' => $palavras
        ]);
    }

    public function api(){
        $palavras = $this->palavrasRepository->paginate(24);
        return PalavraResource::collection($palavras);
    }

    public function create() {
        $palavra = new Palavra();

        return view('palavra.palavra', [
            'palavra' => $palavra
        ]);
    }

    public function edit($id) {
        $palavra = Palavra::find($id);
        // $grupos = Grupo::all()
        // $grupos_palavras = DB::table('grupos_palavras')->where('palavra_id', $id)->get()::paginate(5);
        $grupos_palavras = DB::table('grupos_palavras')->where('palavra_id', $id)->get();
        
        return view('palavra.palavra', [
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

        if ($validator->fails()) return redirect()->route('palavranovo')->withErrors($validator)->withInput();
        else {
            $palavra = new Palavra();
            $palavra->nome = $request->input('nome');
            $palavra->save();
            
            return back()->with('success', 'Palavra salva com sucesso!');
            // return redirect()->route('palavras');
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
