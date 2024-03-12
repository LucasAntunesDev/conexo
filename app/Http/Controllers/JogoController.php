<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Jogo;
use App\Http\Controllers\Controller;

class JogoController extends Controller {

    public function index() {
        $jogos = Jogo::all();

        $resultados = DB::select("
        SELECT c1.id AS categoria_id_1, c2.id AS categoria_id_2
        FROM categorias AS c1
        JOIN categorias_palavras AS cp1 ON c1.id = cp1.categoria_id
        JOIN categorias_palavras AS cp2 ON cp1.palavra_id = cp2.palavra_id
        JOIN categorias AS c2 ON cp2.categoria_id = c2.id AND c1.id < c2.id
        GROUP BY c1.id, c2.id
        HAVING COUNT(DISTINCT cp1.palavra_id) >= 1
        ORDER BY RAND()
        LIMIT 2
        ");
        
        return response()->json($resultados);

        // return view('jogos', [
        //     'jogos' => $jogos
        // ]);
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

    // public function store(Request $request) {
    public function store() {
        $resultados = DB::select("
        SELECT c1.id AS categoria_id_1, c2.id AS categoria_id_2
        FROM categorias AS c1
        JOIN categorias_palavras AS cp1 ON c1.id = cp1.categoria_id
        JOIN categorias_palavras AS cp2 ON cp1.palavra_id = cp2.palavra_id
        JOIN categorias AS c2 ON cp2.categoria_id = c2.id AND c1.id < c2.id
        GROUP BY c1.id, c2.id
        HAVING COUNT(DISTINCT cp1.palavra_id) >= 1
        ORDER BY RAND()
        LIMIT 2
        ");

        foreach ($resultados as $resultado) {
            $jogo = new Jogo();
            $jogo->categorias_ids = $resultado->categoria_id_1 . ',' . $resultado->categoria_id_2;
            $jogo->data = now();
            $jogo->save();
        }

        // $messages = [
        //     'nome.required' => 'O campo título deve ser preenchido',
        //     'disciplina_id.required' => 'O id da disciplina deve ser preenchido'
        // ];

        // $validator = Validator::make($request->all(), [
        //     'nome' => 'required',
        //     'disciplina_id' => 'required'
        // ], $messages);

        // if ($validator->fails()) return redirect()->route('jogonovo')->withErrors($validator)->withInput();
        // else {
        //     $jogo = new Jogo();
        //     $jogo->nome = $request->input('nome');
        //     $jogo->disciplina_id = $request->input('disciplina_id');
        //     $jogo->save();

        //     return redirect()->route('diario');
        // }
    }

    public function storeCategoriasSorteadas() {
        // $resultados = $categorias = DB::select("
        // SELECT c1.id AS categoria_id_1, c2.id AS categoria_id_2
        // FROM categorias AS c1
        // JOIN categorias_palavras AS cp1 ON c1.id = cp1.categoria_id
        // JOIN categorias_palavras AS cp2 ON cp1.palavra_id = cp2.palavra_id
        // JOIN categorias AS c2 ON cp2.categoria_id = c2.id AND c1.id < c2.id
        // GROUP BY c1.id, c2.id
        // HAVING COUNT(DISTINCT cp1.palavra_id) >= 1
        // ORDER BY RAND()
        // LIMIT 2
        // ");

        // foreach ($resultados as $resultado) {
        //     $jogo = new Jogo();
        //     $jogo->categorias_ids = $resultado->categoria_id_1 . ',' . $resultado->categoria_id_2;
        //     $jogo->data = now();
        //     $jogo->save();
        // }

        // return redirect()->route('diario');
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
