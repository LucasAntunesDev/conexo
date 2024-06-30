<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GruposSeeder extends Seeder {
    
    public function run(): void {
        DB::table('grupos')->insert([
            // ['id' => 1, 'nome' => 'Ondas'],
            // ['id' => 2, 'nome' => 'Partículas'],
            // ['id' => 3, 'nome' => 'Mecânica Newtoniana'],
            // ['id' => 4, 'nome' => 'Termodinâmica'],
            // ['id' => 5, 'nome' => 'Físicos famosos'],
            // ['id' => 6, 'nome' => 'Funções JS'],
            // ['id' => 7, 'nome' => 'Funções PHP'],
            // ['id' => 8, 'nome' => 'HTML'],
            // ['id' => 9, 'nome' => 'CSS'],
            // ['id' => 10, 'nome' => 'Funções inorgânicas'],
            // ['id' => 11, 'nome' => 'Funções orgânicas'],
            // ['id' => 12, 'nome' => 'Cadeias acíclicas'],
            // ['id' => 13, 'nome' => 'Cadeias ramificadas'],

        ]);
    }
}
