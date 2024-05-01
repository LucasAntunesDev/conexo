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
        $resultados = DB::select("
        SELECT * FROM
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

        return view('conexo')->with('resultados', $resultados);

    }

    public function api() {

        // Obtenha todas as categorias da tabela "categorias"
        $categorias = Categoria::all();

        // Obtenha todos os jogos da tabela "jogos"
        $jogos = Jogo::all();

        // Itere sobre cada jogo
        foreach ($jogos as $jogo) {
            // Gere IDs de categorias aleatórias (você pode ajustar o intervalo conforme necessário)
            $categorias_ids = $categorias->pluck('id')->random(4);

            // Atualize o jogo com os IDs de categoria aleatórios
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

            // Faça algo com as palavras selecionadas (por exemplo, exiba-as)
            foreach ($palavras as $palavra) {
                // echo $palavra->nome . "<br>";
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

        // return response()->json($palavras[0]);
        // Imprima uma mensagem de sucesso
        // return "IDs de categoria aleatórios inseridos na tabela 'jogos'.\n";
        // echo "IDs de categoria aleatórios inseridos na tabela 'jogos'.\n";

        die;

        // $jogos = Jogo::all();

        // return view('conexo')->with('resultados', $resultados);
        $resultados = DB::select("
        SELECT * FROM
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
        return response()->json($resultados);
    }


    // public function 

    public function getCategorias() {
        // $query = DB::table('palavras')->where('nome', 'sol')->first();
        // $query = DB::table('palavras')->get();
        #$categorias = DB::table('categorias')->join('categorias_palavras', 'categorias.id', '=', 'categorias_palavras.palavra_id')->join('palavras', 'categorias_palavras.palavra_id', '=', 'palavras.id')->inRandomOrder()->limit(4)->get();

        $categorias = DB::table('jogos')->where('id', '1')->get();
        // $categorias = DB::table('categorias')->inRandomOrder()->limit(4)->get();
        // return json()->$resultados->id;
        // echo '<pre>';
        // return var_dump($categorias[0]->categoria_1_id);
        $categorias = [$categorias[0]->categoria_1_id, $categorias[0]->categoria_2_id, $categorias[0]->categoria_3_id, $categorias[0]->categoria_4_id];
        return response()->json($categorias);
        // return response()->json($categorias);


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
