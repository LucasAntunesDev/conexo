<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grupos')->insert([
            ['nome' => 'Advérbios de Lugar', 'disciplina_id' =>  1],
            ['nome' => 'Fontes de Energia', 'disciplina_id' =>  1],
            ['nome' => 'Participantes num processo judicial', 'disciplina_id' =>  1],
            ['nome' => 'Notas Musicais', 'disciplina_id' =>  1],
            ['nome' => 'Times de Futebol', 'disciplina_id' =>  1],
            ['nome' => 'Bancos', 'disciplina_id' =>  1],
            ['nome' => 'Estabelecimentos educacionais', 'disciplina_id' =>  1],
            ['nome' => 'Cargos no mercado financeiro', 'disciplina_id' =>  1],
            ['nome' => 'Comida', 'disciplina_id' =>  1],
            ['nome' => 'Bairros do Rio de Janeiro', 'disciplina_id' =>  1],
        ]);
    }
}
