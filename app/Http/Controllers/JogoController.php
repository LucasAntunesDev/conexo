<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Jogo;
#////////
use App\Models\Categoria;
use App\Models\CategoriaPalavra;
use App\Models\Palavra;
#////////
use App\Http\Controllers\Controller;
// use CategoriaController;

class JogoController extends Controller {

    public function index() {
        return view('conexo');
    }

    public function api() {

        $categorias = Categoria::all();
        $jogos = Jogo::all();

        foreach ($jogos as $jogo) {
            $categorias_ids = $categorias->pluck('id')->random(4);

            $jogo->update([
                'categoria_1_id' => $categorias_ids[0],
                'categoria_2_id' => $categorias_ids[1],
                'categoria_3_id' => $categorias_ids[2],
                'categoria_4_id' => $categorias_ids[3],
            ]);
        }

        $palavras_selecionadas = [];

        // Agora, para cada categoria selecionada, selecione 4 palavras aleatórias vinculadas a essa categoria
        foreach ($categorias_ids as $categoria_id) {
            $palavras = Palavra::whereHas('categorias', function ($query) use ($categoria_id) {
                $query->where('categoria_id', $categoria_id);
            })->inRandomOrder()->limit(4)->get();

            foreach ($palavras as $palavra) {
                $palavras_selecionadas[] = [
                    'categoria_id' => $categorias->find($categoria_id)->id,
                    'nome' => $palavra->nome,
                    'categoria' => $categorias->find($categoria_id)->nome,
                ];
            }
        }

        $resultado[] = [
            'jogo_id' => $jogo->id,
            'palavras' => $palavras_selecionadas,
        ];

        return response()->json($resultado);
    }
    public function create() {
        $jogo = new Jogo();

        return view('jogo', [
            'jogo' => $jogo
        ]);
    }

    public function edit($id) {
        $jogo = Jogo::find($id);

        return view('jogo', [
            'jogo' => $jogo
        ]);
    }

    public function store() {
        #parte do código que está no método api tem que vir aqui,
        #com o método store tendo que ser chamado diariamente,
        #com o intuito de armazenar o jogo daqule dia
    }


    public function update($id, Request $request) {
        // $validator = Validator::make($request->all(), [
        //     'nome' => 'required',
        //     'disciplina_id' => 'required'
        // ]);

        // if ($validator->fails()) return redirect()->route('jogosnovo')->withErrors($validator)->withInput();
        // else {
        //     $jogo = Jogo::find($id);
        //     $jogo->nome = $request->input('nome');
        //     $jogo->disciplina_id = $request->input('disciplina_id');
        //     $jogo->save();

        //     return redirect()->route('diario');
        // }
    }

    public function destroy($id) {
        $jogo = Jogo::find($id);
        $jogo->delete();

        return redirect()->route('diario');
    }
}
