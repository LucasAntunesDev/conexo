<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Jogo;
use App\Models\Grupo;
use App\Models\GrupoPalavra;
use App\Models\Palavra;
use App\Models\Disciplina;
use App\Http\Controllers\Controller;

class JogoController extends Controller {

    public function index() {
        $jogos = Jogo::paginate(16);

        $disciplinas = Disciplina::withCount(['grupos' => function ($query) {
            $query->has('palavras', '>=', 4);
        }])->get()->filter(function ($disciplina) {
            return $disciplina->grupos_count >= 4;
        });


        if (isset($_GET['disciplinaId'])) {
            $disciplina_id = $_GET['disciplinaId'];

            $datas = Jogo::join('grupos', 'jogos.grupo_1_id', '=', 'grupos.id')
                ->where('grupos.disciplina_id', $disciplina_id)
                ->select('jogos.data')
                ->paginate(16);
        } else {
            $datas = Jogo::select('data')->paginate(16);
        }


        return view('jogos.jogos', [
            'jogos' => $jogos,
            'datas' => $datas,
            'disciplinas' => $disciplinas
        ]);
    }

    public function jogo() {
        return view('conexo');
    }

    public function api() {
        $data = request()->has('id') ? request()->get('id') : 1;
        $jogo = Jogo::where('id', $data)->first();

        // $jogo = $jogo->toArray();

        // $resposta = [];

        for ($i = 1; $i <= 4; $i++) {
            $grupoId = $jogo["grupo_{$i}_id"];
            $palavras = explode(", ", $jogo["grupo_{$i}_palavras"]);

            $nomeDoGrupo = Grupo::find($grupoId)->nome;

            $resposta[] = [
                'nome' => $jogo['nome'],
                'jogo_id' => $jogo['id'],
                'grupo_id' => $grupoId,
                'grupo' => $nomeDoGrupo,
                'palavras' => $palavras,
                'data' => $jogo['data'],
            ];
        }

        return response()->json($resposta);
    }

    public function create() {
        $jogo = new Jogo();

        // return view('jogo.jogo', [
        //     'jogo' => $jogo
        // ]);

    }

    public function edit($id) {
        $jogo = Jogo::find($id);

        return view('jogos.jogo', [
            'jogo' => $jogo
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'nome.required' => 'Você deve preencher o campo com algum nome'
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
        ], $messages);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {

            $data = request()->has('dataJogo') ? request()->get('dataJogo') : now()->toDateString();

            $disciplina_id = (int) $request->input('disciplina_id');

            $grupos = Grupo::where('disciplina_id', $disciplina_id)
                ->whereHas('palavras', function ($query) {
                    $query->groupBy('grupo_id')
                        ->havingRaw('COUNT(palavra_id) >= 4');
                })
                ->get();

            $grupos_ids = $grupos->pluck('id')->random(4);

            $palavras_selecionadas = [];

            foreach ($grupos_ids as $grupo_id) {
                $palavras_grupo = Palavra::whereHas('grupos', function ($query) use ($grupo_id) {
                    $query->where('grupo_id', $grupo_id);
                })
                    ->whereNotIn('id', array_column($palavras_selecionadas, 'id'))
                    ->inRandomOrder()
                    ->limit(4)
                    ->get();

                foreach ($palavras_grupo as $palavra) {
                    $palavras_selecionadas[] = [
                        'id' => $palavra->id,
                        'nome' => $palavra->nome,
                        'grupo_id' => $grupo_id,
                        'grupo' => $grupos->find($grupo_id)->nome,
                    ];
                }
            }

            $todas_palavras = [];

            foreach ($palavras_selecionadas as $index => $palavra) {
                array_push($todas_palavras, $palavra['nome']);
            }

            $grupos_palavras = array_chunk($todas_palavras, 4);

            $grupos_palavras = array_map(function ($item) {
                return implode(", ", $item);
            }, $grupos_palavras);


            $jogo = Jogo::create([
                'nome' => $request->input('nome'),
                'grupo_1_id' => $grupos_ids[0],
                'grupo_2_id' => $grupos_ids[1],
                'grupo_3_id' => $grupos_ids[2],
                'grupo_4_id' => $grupos_ids[3],
                'grupo_1_palavras' => $grupos_palavras[0],
                'grupo_2_palavras' => $grupos_palavras[1],
                'grupo_3_palavras' => $grupos_palavras[2],
                'grupo_4_palavras' => $grupos_palavras[3],
                'data' => $data,
            ]);

            $jogo->save();
            return back()->with('success', 'Jogo salvo com sucesso!');
        }
    }


    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
        ]);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $jogo = Jogo::find($id);
            $jogo->nome = $request->input('nome');
            $jogo->save();

            return redirect()->route('jogos');
        }
    }

    public function destroy($id) {
        $jogo = Jogo::find($id);
        $jogo->delete();

        return redirect()->route('diario');
    }
}
