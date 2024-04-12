<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Jogo;
use App\Http\Controllers\Controller;

class JogoController extends Controller
{

    public function index() {
        // $jogos = Jogo::all();

        $resultados = DB::select("
        SELECT
        *
    FROM
        (
            SELECT
                c.nome,
                cp.palavra_id,
                cp.categoria_id
            FROM
                categorias c
                INNER JOIN categorias_palavras cp on c.id = cp.categoria_id
                INNER JOIN (
                    SELECT
                        p.id
                    FROM
                        `palavras` p
                        INNER join categorias_palavras cp on p.id = cp.palavra_id
                    GROUP by
                        p.id,
                        p.nome
                    HAVING
                        count(p.id) > 1
                    order by
                        rand ()
                    limit
                        2
                ) as t ON cp.palavra_id = t.id limit 16
        ) as t
        JOIN categorias_palavras cp on t.categoria_id = cp.categoria_id
        JOIN palavras p on cp.palavra_id < p.id
        limit 16;
        ");
        
        #retorna json
        // return response()->json($resultados);

        return  view('conexo')->with('resultados', $resultados);

        // $query = "select nome from palavras order by rand() limit 4;";

        // $resultados1 = DB::select($query); 
        // $resultados2 = DB::select($query); 
        // $resultados3 = DB::select($query); 
        // $resultados4 = DB::select($query);


        // return response()->json([$resultados1,
        // $resultados2,
        // $resultados3,
        // $resultados4,]);

    }

    public function api() {
        $resultados = DB::select("
        SELECT *
        FROM
            (
                SELECT
                    c.nome,
                    cp.palavra_id,
                    cp.categoria_id
                FROM
                    categorias c
                    INNER JOIN categorias_palavras cp on c.id = cp.categoria_id
                    INNER JOIN (
                        SELECT
                            p.id
                        FROM
                            `palavras` p
                            INNER join categorias_palavras cp on p.id = cp.palavra_id
                        GROUP by
                            p.id,
                            p.nome
                        HAVING
                            count(p.id) > 1
                        order by
                            rand ()
                        limit
                            2
                    ) as t ON cp.palavra_id = t.id
            ) as t
            JOIN categorias_palavras cp on t.categoria_id = cp.categoria_id
            JOIN palavras p on cp.palavra_id < p.id
            limit 16;
        ");
        
        #retorna json
        return response()->json($resultados);
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
        $categorias_ids = DB::select("
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

        var_dump($categorias_ids);

        $resultados = DB::select("
        SELECT c1.id AS categoria_id_1, c1.nome as categoria_1_nome, c2.id AS categoria_id_2, c2.nome as categoria_2_nome
        FROM categorias AS c1
        JOIN categorias_palavras AS cp1 ON c1.id = cp1.categoria_id
        JOIN categorias_palavras AS cp2 ON cp1.palavra_id = cp2.palavra_id
        JOIN categorias AS c2 ON cp2.categoria_id = c2.id AND c1.id < c2.id
        GROUP BY c1.id, c2.id
        HAVING COUNT(DISTINCT cp1.palavra_id) >= 1
        ORDER BY RAND()
        LIMIT 2
        ");

        // foreach ($resultados as $resultado) {
        //     $jogo = new Jogo();
        //     $jogo->categorias_ids = $resultado->categoria_id_1 . ',' . $resultado->categoria_id_2;
        //     $jogo->data = now();
        //     $jogo->save();
        // }

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