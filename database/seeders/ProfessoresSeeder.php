<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProfessoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('professores')->insert([
            ['nome' =>'Rafael Jaques', 'login' => 'Rafael Jaques', 'senha' => bcrypt('Rafael Jaques')],
            ['nome' =>'Thyago Salvá', 'login' => 'Thyago Salvá', 'senha' => bcrypt('Thyago Salvá')],
            ['nome' =>'Ivan Prá', 'login' => 'Ivan Prá', 'senha' => bcrypt('Ivan Prá')],
            ['nome' =>'Eduardo Schenato', 'login' => 'Eduardo Schenato', 'senha' => bcrypt('Eduardo Schenato')],
            ['nome' =>'Ronaldo Serpa da Rosa', 'login' => 'Ronaldo Serpa da Rosa', 'senha' => bcrypt('Ronaldo Rosa')],
        ]);
    }
}
