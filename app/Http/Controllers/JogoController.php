<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Jogo;
#////////
use App\Models\Grupo;
use App\Models\GrupoPalavra;
use App\Models\Palavra;
#////////
use App\Http\Controllers\Controller;
// use GrupoController;

class JogoController extends Controller {

    public function index() {
        return view('conexo');
    }

    public function api() {
        return;
        $grupos = Grupo::all();
        $jogos = Jogo::all();

        foreach ($jogos as $jogo) {
            $grupos_ids = $grupos->pluck('id')->random(4);

            $jogo->update([
                'grupo_1_id' => $grupos_ids[0],
                'grupo_2_id' => $grupos_ids[1],
                'grupo_3_id' => $grupos_ids[2],
                'grupo_4_id' => $grupos_ids[3],
            ]);
        }

        $palavras_selecionadas = [];

        // Agora, para cada grupo selecionada, selecione 4 palavras aleatórias vinculadas a essa grupo
        foreach ($grupos_ids as $grupo_id) {
            $palavras = Palavra::whereHas('grupos', function ($query) use ($grupo_id) {
                $query->where('grupo_id', $grupo_id);
            })->inRandomOrder()->limit(4)->get();

            foreach ($palavras as $palavra) {
                $palavras_selecionadas[] = [
                    'grupo_id' => $grupos->find($grupo_id)->id,
                    'nome' => $palavra->nome,
                    'grupo' => $grupos->find($grupo_id)->nome,
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
        #echo '<pre>';
        $hoje = now()->toDateString(); // Obtém a data atual no formato 'YYYY-MM-DD'
        $jogo = Jogo::whereDate('data', $hoje)->first();

        # var_dump($hoje);
        # echo '<br>';
        # var_dump($jogo);
        # echo '<br>';

        if (is_null($jogo)) {
            $grupos = Grupo::all();
            $grupos_ids = $grupos->pluck('id')->random(4);
            #var_dump($grupos_ids);
            #echo '<br>';

            $palavras_selecionadas = [];

            // for ($i = 0; $i <= 4; $i++) {
            foreach ($grupos_ids as $grupo_id) {
                $palavras = Palavra::whereHas('grupos', function ($query) use ($grupo_id) {
                    $query->where('grupo_id', $grupo_id);
                })->inRandomOrder()->limit(4)->get();

                foreach ($palavras as $palavra) {
                    $palavras_selecionadas[] = [
                        'grupo_id' => $grupos->find($grupo_id)->id,
                        'nome' => $palavra->nome,
                        'grupo' => $grupos->find($grupo_id)->nome,
                    ];
                }
            }

            #echo '<h1>Palvras Foreach</h1>';

            $todas_palavras = [];

            foreach ($palavras_selecionadas as $index => $palavra) {
                #    var_dump($palavra['nome']);
                array_push($todas_palavras, $palavra['nome']);
            }

            #echo '<h1>
            #Palavras agrupadas:
            #</h1>';
            $grupos_palavras = array_chunk($todas_palavras, 4);

            $grupos_palavras = array_map(function ($item) {
                return implode(", ", $item);
            }, $grupos_palavras);

            print_r($grupos_palavras);
            // var_dump($todas_palavras);
            // print_r($palavras_selecionadas);

            // die;

            // Cria um novo jogo com os IDs dos grupos selecionados aleatoriamente
            $jogo = Jogo::create([
                'grupo_1_id' => $grupos_ids[0],
                'grupo_2_id' => $grupos_ids[1],
                'grupo_3_id' => $grupos_ids[2],
                'grupo_4_id' => $grupos_ids[3],
                'grupo_1_palavras' => $grupos_palavras[0],
                'grupo_2_palavras' => $grupos_palavras[1],
                'grupo_3_palavras' => $grupos_palavras[2],
                'grupo_4_palavras' => $grupos_palavras[3],
                'data' => $hoje,
                // Defina os outros campos conforme necessário
            ]);
        }

        // return $jogo;

        // Supondo que $jogo já contém os dados do jogo atual
        $jogoArray = $jogo->toArray();

        // Estrutura desejada para o JSON
        $jogoFormatado = [];

        // Adicionando cada grupo e suas palavras ao array formatado
        for ($i = 1; $i <= 4; $i++) {
            $grupoId = $jogoArray["grupo_{$i}_id"];
            $palavras = explode(", ", $jogoArray["grupo_{$i}_palavras"]);

            // Obter o nome do grupo baseado no ID (substitua 'NomeDoGrupo' pelo método real para obter o nome)
            $nomeDoGrupo = Grupo::find($grupoId)->nome; // Substitua por seu método de obtenção do nome do grupo

            $jogoFormatado[] = [
                'jogo_id' => $jogoArray['id'],
                'grupo_id' => $grupoId,
                'grupo' => $nomeDoGrupo,
                'palavras' => $palavras
            ];
        }

        // Convertendo o array formatado para JSON
        $jogoJson = json_encode($jogoFormatado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        // Retornando o JSON
        return $jogoFormatado;

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
