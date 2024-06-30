<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProfessoresSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('professores')->insert([
            ['id' => 1,  'nome' =>'Rafael Jaques', 'login' => 'Rafael Jaques', 'senha' => bcrypt('Rafael Jaques')],
            ['id' => 2,  'nome' =>'Thyago Salvá', 'login' => 'Thyago Salvá', 'senha' => bcrypt('Thyago Salvá')],
            ['id' => 3,  'nome' =>'Ivan Prá', 'login' => 'Ivan Prá', 'senha' => bcrypt('Ivan Prá')],
            ['id' => 4,  'nome' =>'Eduardo Schenato', 'login' => 'Eduardo Schenato', 'senha' => bcrypt('Eduardo Schenato')],
            ['id' => 5,  'nome' =>'Ronaldo', 'login' => 'Ronaldo', 'senha' => bcrypt('Ronaldo')],
            ['id' => 6,  'nome' =>'Maurico Rosito', 'login' => 'Maurico Rosito', 'senha' => bcrypt('Maurico Rosito')],
            ['id' => 7,  'nome' =>'Lissandra', 'login' => 'Lissandra', 'senha' => bcrypt('Lissandra')],
            ['id' => 8,  'nome' =>'Sandro', 'login' => 'Sandro', 'senha' => bcrypt('Sandro')],
            ['id' => 9, 'nome' => 'admin', 'login' => 'admin', 'senha' => bcrypt('admin')],
        ]);
    }
}
