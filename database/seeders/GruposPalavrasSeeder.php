<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GruposPalavrasSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('grupos_palavras')->insert([
            ['grupo_id' => 1, 'palavra_id' => 1],
            ['grupo_id' => 4, 'palavra_id' => 1],
            ['grupo_id' => 1, 'palavra_id' => 2],
            ['grupo_id' => 1, 'palavra_id' => 3],
            ['grupo_id' => 1, 'palavra_id' => 4],
            ['grupo_id' => 2, 'palavra_id' => 5],
            ['grupo_id' => 2, 'palavra_id' => 6],
            ['grupo_id' => 4, 'palavra_id' => 6],
            ['grupo_id' => 2, 'palavra_id' => 7],
            ['grupo_id' => 2, 'palavra_id' => 8],
            ['grupo_id' => 4, 'palavra_id' => 9],
            ['grupo_id' => 3, 'palavra_id' => 9],
            ['grupo_id' => 3, 'palavra_id' => 10],
            ['grupo_id' => 3, 'palavra_id' => 11],
            ['grupo_id' => 3, 'palavra_id' => 12],
            ['grupo_id' => 2, 'palavra_id' => 13],
            ['grupo_id' => 2, 'palavra_id' => 14],
            ['grupo_id' => 2, 'palavra_id' => 15],
            ['grupo_id' => 2, 'palavra_id' => 16],
            ['grupo_id' => 5, 'palavra_id' => 17],
            ['grupo_id' => 5, 'palavra_id' => 18],
            ['grupo_id' => 5, 'palavra_id' => 19],
            ['grupo_id' => 5, 'palavra_id' => 20],
            ['grupo_id' => 5, 'palavra_id' => 21],
            ['grupo_id' => 6, 'palavra_id' => 22],
            ['grupo_id' => 6, 'palavra_id' => 23],
            ['grupo_id' => 6, 'palavra_id' => 24],
            ['grupo_id' => 6, 'palavra_id' => 25],
            ['grupo_id' => 7, 'palavra_id' => 26],
            ['grupo_id' => 7, 'palavra_id' => 27],
            ['grupo_id' => 7, 'palavra_id' => 28],
            ['grupo_id' => 7, 'palavra_id' => 29],
            ['grupo_id' => 8, 'palavra_id' => 30],
            ['grupo_id' => 8, 'palavra_id' => 31],
            ['grupo_id' => 8, 'palavra_id' => 32],
            ['grupo_id' => 8, 'palavra_id' => 33],
            ['grupo_id' => 9, 'palavra_id' => 34],
            ['grupo_id' => 9, 'palavra_id' => 35],
            ['grupo_id' => 9, 'palavra_id' => 36],
            ['grupo_id' => 9, 'palavra_id' => 37],
            ['grupo_id' => 10,'palavra_id' =>  38],
            ['grupo_id' => 10,'palavra_id' =>  39],
            ['grupo_id' => 10,'palavra_id' =>  40],
            ['grupo_id' => 10,'palavra_id' =>  41],
        ]);
    }
}
