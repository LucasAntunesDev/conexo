<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('disciplinas')->insert([
            ['nome' => 'Alogritmos', 'professor_id' => 1],
            ['nome' => 'Programação Web I', 'professor_id' => 2],
            ['nome' => 'Introdução a Computação', 'professor_id' => 3],
            ['nome' => 'Programação Web II', 'professor_id' => 4],
            ['nome' => 'Análise e Projeto De Sistemas Web', 'professor_id' => 7],
            ['nome' => 'Banco de Dados', 'professor_id' => 5],
            ['nome' => 'Programação Web III', 'professor_id' => 1],
            ['nome' => 'Desenvolvimento de Sistemas', 'professor_id' => 2],
            ['nome' => 'Fundamentos de Redes de Computadores', 'professor_id' => 8],
        ]);
    }
}
