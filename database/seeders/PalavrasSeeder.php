<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PalavrasSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('palavras')->insert([
            ['nome' => 'lá'],
            ['nome' => 'acolá'],
            ['nome' => 'ali'],
            ['nome' => 'aqui'],
            ['nome' => 'vento'],
            ['nome' => 'sol'],
            ['nome' => 'carvão'],
            ['nome' => 'água'],
            ['nome' => 'ré'],
            ['nome' => 'juíza'],
            ['nome' => 'testemunha'],
            ['nome' => 'autora'],
            ['nome' => 'dó'],
            ['nome' => 'mi'],
            ['nome' => 'si'],
            ['nome' => 'fá'],
            ['nome' => 'inter'],
            ['nome' => 'grêmio'],
            ['nome' => 'palmeiras'],
            ['nome' => 'flamengo'],
            ['nome' => 'milan'],
            ['nome' => 'banrisul'],
            ['nome' => 'caixa'],
            ['nome' => 'bradesco'],
            ['nome' => 'santander'],
            ['nome' => 'liceu'],
            ['nome' => 'escola'],
            ['nome' => 'ginágio'],
            ['nome' => 'instituto'],
            ['nome' => 'traders'],
            ['nome' => 'investidores'],
            ['nome' => 'contadores'],
            ['nome' => 'economistas'],
            ['nome' => 'merenda'],
            ['nome' => 'provisão'],
            ['nome' => 'refeição'],
            ['nome' => 'lance'],
            ['nome' => 'zumbi'],
            ['nome' => 'colégio'],
            ['nome' => 'bancários'],
            ['nome' => 'recreio'],
        ]);
    }
}
