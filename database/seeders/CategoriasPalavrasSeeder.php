<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriasPalavrasSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('categorias_palavras')->insert([
            ['categoria_id' => 1, 'palavra_id' => 1],
            ['categoria_id' => 4, 'palavra_id' => 1],
            ['categoria_id' => 1, 'palavra_id' => 2],
            ['categoria_id' => 1, 'palavra_id' => 3],
            ['categoria_id' => 1, 'palavra_id' => 4],
            ['categoria_id' => 2, 'palavra_id' => 5],
            ['categoria_id' => 2, 'palavra_id' => 6],
            ['categoria_id' => 4, 'palavra_id' => 6],
            ['categoria_id' => 2, 'palavra_id' => 7],
            ['categoria_id' => 2, 'palavra_id' => 8],
            ['categoria_id' => 4, 'palavra_id' => 9],
            ['categoria_id' => 3, 'palavra_id' => 9],
            ['categoria_id' => 3, 'palavra_id' => 10],
            ['categoria_id' => 3, 'palavra_id' => 11],
            ['categoria_id' => 3, 'palavra_id' => 12],
            ['categoria_id' => 2, 'palavra_id' => 13],
            ['categoria_id' => 2, 'palavra_id' => 14],
            ['categoria_id' => 2, 'palavra_id' => 15],
            ['categoria_id' => 2, 'palavra_id' => 16],
            ['categoria_id' => 5, 'palavra_id' => 17],
            ['categoria_id' => 5, 'palavra_id' => 18],
            ['categoria_id' => 5, 'palavra_id' => 19],
            ['categoria_id' => 5, 'palavra_id' => 20],
            ['categoria_id' => 5, 'palavra_id' => 21],
            ['categoria_id' => 6, 'palavra_id' => 22],
            ['categoria_id' => 6, 'palavra_id' => 23],
            ['categoria_id' => 6, 'palavra_id' => 24],
            ['categoria_id' => 6, 'palavra_id' => 25],
            ['categoria_id' => 7, 'palavra_id' => 26],
            ['categoria_id' => 7, 'palavra_id' => 27],
            ['categoria_id' => 7, 'palavra_id' => 28],
            ['categoria_id' => 7, 'palavra_id' => 29],
            ['categoria_id' => 8, 'palavra_id' => 30],
            ['categoria_id' => 8, 'palavra_id' => 31],
            ['categoria_id' => 8, 'palavra_id' => 32],
            ['categoria_id' => 8, 'palavra_id' => 33],
            ['categoria_id' => 9, 'palavra_id' => 34],
            ['categoria_id' => 9, 'palavra_id' => 35],
            ['categoria_id' => 9, 'palavra_id' => 36],
            ['categoria_id' => 9, 'palavra_id' => 37],
            ['categoria_id' => 10,'palavra_id' =>  38],
            ['categoria_id' => 10,'palavra_id' =>  39],
            ['categoria_id' => 10,'palavra_id' =>  40],
            ['categoria_id' => 10,'palavra_id' =>  41],
        ]);
    }
}
