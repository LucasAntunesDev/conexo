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
        $jogos = Jogo::all();

        $datas = Jogo::pluck('data')->map(function ($data) {
            return $data;
        });

        $datas = Jogo::select('data')->paginate(16);

        return view('jogos', [
            'jogos' => $jogos,
            'datas' => $datas
        ]);
    }

    public function jogo() {
        return view('conexo');
    }

    public function api() {
        $data = request()->has('dataJogo') ? request()->get('dataJogo') : now()->toDateString();
        $jogo = Jogo::whereDate('data', $data)->first();


        if (is_null($jogo)) {
            $grupos = Grupo::all();
            $grupos_ids = $grupos->pluck('id')->random(4);

            $palavras_selecionadas = [];

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

            $todas_palavras = [];

            foreach ($palavras_selecionadas as $index => $palavra) {
                array_push($todas_palavras, $palavra['nome']);
            }

            $grupos_palavras = array_chunk($todas_palavras, 4);

            $grupos_palavras = array_map(function ($item) {
                return implode(", ", $item);
            }, $grupos_palavras);

            $jogo = Jogo::create([
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
        }

        $jogo = $jogo->toArray();

        $resposta = [];

        for ($i = 1; $i <= 4; $i++) {
            $grupoId = $jogo["grupo_{$i}_id"];
            $palavras = explode(", ", $jogo["grupo_{$i}_palavras"]);

            $nomeDoGrupo = Grupo::find($grupoId)->nome;

            $resposta[] = [
                'jogo_id' => $jogo['id'],
                'grupo_id' => $grupoId,
                'grupo' => $nomeDoGrupo,
                'palavras' => $palavras
            ];
        }

        return response()->json($resposta);
    }

    // public function getDatas() {
    //     $datas = Jogo::pluck('data')->map(function ($data) {
    //         // return $data->format('d/m/Y');
    //         return $data;
    //     });

    //     // $data = now()->toDateString();
    //     // $jogo = Jogo::whereDate('data', $data)->first();
    //     return response()->json($datas);

    // }

    public function create() {
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
