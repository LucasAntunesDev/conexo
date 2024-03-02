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
            ['nome' => 'Desenvolvimento de Sistemas', 'professor_Id' => 2],
            ['nome' => 'Programação Web III', 'professor_Id' => 1],
            ['nome' => 'Programação Web II', 'professor_Id' => 4],
            ['nome' => 'Programação Web I', 'professor_Id' => 2],
            ['nome' => 'Introdução a Computação', 'professor_Id' => 3],
        ]);
    }
}
