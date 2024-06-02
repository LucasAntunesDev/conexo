<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GruposDisciplinasSeeder extends Seeder {

    public function run(): void {
        DB::table('grupos_disciplinas')->insert([
            ['id' => 1, 'disciplina_id' => 1, 'grupo_id' => 1],
            ['id' => 2, 'disciplina_id' => 1, 'grupo_id' => 2],
            ['id' => 3, 'disciplina_id' => 1, 'grupo_id' => 3],
            ['id' => 4, 'disciplina_id' => 1, 'grupo_id' => 4],
            ['id' => 5, 'disciplina_id' => 1, 'grupo_id' => 5],
            ['id' => 6, 'disciplina_id' => 2, 'grupo_id' => 6],
            ['id' => 7, 'disciplina_id' => 2, 'grupo_id' => 7],
            ['id' => 8, 'disciplina_id' => 2, 'grupo_id' => 8],
            ['id' => 9, 'disciplina_id' => 2, 'grupo_id' => 9],
            ['id' => 10, 'disciplina_id' =>  3, 'grupo_id' => 10],
            ['id' => 11, 'disciplina_id' =>  3, 'grupo_id' => 11],
            ['id' => 12, 'disciplina_id' =>  3, 'grupo_id' => 12],
            ['id' => 13, 'disciplina_id' =>  3, 'grupo_id' => 13],
        ]);
    }
}
