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
            #Advérbios de Lugar
            ['grupo_id' => 1, 'palavra_id' => 1],
            ['grupo_id' => 1, 'palavra_id' => 2],
            ['grupo_id' => 1, 'palavra_id' => 3],
            ['grupo_id' => 1, 'palavra_id' => 4],

            #Fontes de Energia
            ['grupo_id' => 2, 'palavra_id' => 5],
            ['grupo_id' => 2, 'palavra_id' => 6],
            ['grupo_id' => 2, 'palavra_id' => 7],
            ['grupo_id' => 2, 'palavra_id' => 8],

            #Participantes num processo judicial
            ['grupo_id' => 3, 'palavra_id' => ''],
            ['grupo_id' => 3, 'palavra_id' => ''],
            ['grupo_id' => 3, 'palavra_id' => ''],
            ['grupo_id' => 3, 'palavra_id' => ''],

            #Notas Musicais
            ['grupo_id' => 4, 'palavra_id' => ''],
            ['grupo_id' => 4, 'palavra_id' => ''],
            ['grupo_id' => 4, 'palavra_id' => ''],
            ['grupo_id' => 4, 'palavra_id' => ''],


            #Times de Futebol
            ['grupo_id' => 5, 'palavra_id' => ''],
            ['grupo_id' => 5, 'palavra_id' => ''],
            ['grupo_id' => 5, 'palavra_id' => ''],
            ['grupo_id' => 5, 'palavra_id' => ''],


            #Bancos
            ['grupo_id' => 6, 'palavra_id' => ''],
            ['grupo_id' => 6, 'palavra_id' => ''],
            ['grupo_id' => 6, 'palavra_id' => ''],
            ['grupo_id' => 6, 'palavra_id' => ''],


            #Estabelecimentos educacionais
            ['grupo_id' => 7, 'palavra_id' => ''],
            ['grupo_id' => 7, 'palavra_id' => ''],
            ['grupo_id' => 7, 'palavra_id' => ''],
            ['grupo_id' => 7, 'palavra_id' => ''],


            #Cargos no mercado financeiro
            ['grupo_id' => 8, 'palavra_id' => ''],
            ['grupo_id' => 8, 'palavra_id' => ''],
            ['grupo_id' => 8, 'palavra_id' => ''],
            ['grupo_id' => 8, 'palavra_id' => ''],


            #Comida
            ['grupo_id' => 9, 'palavra_id' => ''],
            ['grupo_id' => 9, 'palavra_id' => ''],
            ['grupo_id' => 9, 'palavra_id' => ''],
            ['grupo_id' => 9, 'palavra_id' => ''],


            #Bairros do Rio de Janeiro
            ['grupo_id' => 10, 'palavra_id' => ''],
            ['grupo_id' => 10, 'palavra_id' => ''],
            ['grupo_id' => 10, 'palavra_id' => ''],
            ['grupo_id' => 10, 'palavra_id' => ''],


            #Tempero
            ['grupo_id' => 11, 'palavra_id' => ''],
            ['grupo_id' => 11, 'palavra_id' => ''],
            ['grupo_id' => 11, 'palavra_id' => ''],
            ['grupo_id' => 11, 'palavra_id' => ''],


            #Interne
            ['grupo_id' => 12, 'palavra_id' => ''],
            ['grupo_id' => 12, 'palavra_id' => ''],
            ['grupo_id' => 12, 'palavra_id' => ''],
            ['grupo_id' => 12, 'palavra_id' => ''],


            #Meios de comunicação obsoleto
            ['grupo_id' => 13, 'palavra_id' => ''],
            ['grupo_id' => 13, 'palavra_id' => ''],
            ['grupo_id' => 13, 'palavra_id' => ''],
            ['grupo_id' => 13, 'palavra_id' => ''],


            #Adjetivos relativos a freqênci
            ['grupo_id' => 14, 'palavra_id' => ''],
            ['grupo_id' => 14, 'palavra_id' => ''],
            ['grupo_id' => 14, 'palavra_id' => ''],
            ['grupo_id' => 14, 'palavra_id' => ''],


            #Itens de papelari
            ['grupo_id' => 15, 'palavra_id' => ''],
            ['grupo_id' => 15, 'palavra_id' => ''],
            ['grupo_id' => 15, 'palavra_id' => ''],
            ['grupo_id' => 15, 'palavra_id' => ''],


            #Cosméticos labiais
            ['grupo_id' => 16, 'palavra_id' => ''],
            ['grupo_id' => 16, 'palavra_id' => ''],
            ['grupo_id' => 16, 'palavra_id' => ''],
            ['grupo_id' => 16, 'palavra_id' => ''],


            #Carnaval
            ['grupo_id' => 17, 'palavra_id' => ''],
            ['grupo_id' => 17, 'palavra_id' => ''],
            ['grupo_id' => 17, 'palavra_id' => ''],
            ['grupo_id' => 17, 'palavra_id' => ''],


            #Ritmos musicais
            ['grupo_id' => 18, 'palavra_id' => ''],
            ['grupo_id' => 18, 'palavra_id' => ''],
            ['grupo_id' => 18, 'palavra_id' => ''],
            ['grupo_id' => 18, 'palavra_id' => ''],


            #Enorme
            ['grupo_id' => 19, 'palavra_id' => ''],
            ['grupo_id' => 19, 'palavra_id' => ''],
            ['grupo_id' => 19, 'palavra_id' => ''],
            ['grupo_id' => 19, 'palavra_id' => ''],


            #Clássicos literário
            ['grupo_id' => 20, 'palavra_id' => ''],
            ['grupo_id' => 20, 'palavra_id' => ''],
            ['grupo_id' => 20, 'palavra_id' => ''],
            ['grupo_id' => 20, 'palavra_id' => ''],


            #Roda (de) __
            ['grupo_id' => 21, 'palavra_id' => ''],
            ['grupo_id' => 21, 'palavra_id' => ''],
            ['grupo_id' => 21, 'palavra_id' => ''],
            ['grupo_id' => 21, 'palavra_id' => ''],


            #Usados no jardi
            ['grupo_id' => 22, 'palavra_id' => ''],
            ['grupo_id' => 22, 'palavra_id' => ''],
            ['grupo_id' => 22, 'palavra_id' => ''],
            ['grupo_id' => 22, 'palavra_id' => ''],


            #Inteligent
            ['grupo_id' => 23, 'palavra_id' => ''],
            ['grupo_id' => 23, 'palavra_id' => ''],
            ['grupo_id' => 23, 'palavra_id' => ''],
            ['grupo_id' => 23, 'palavra_id' => ''],


            #Pássaro
            ['grupo_id' => 24, 'palavra_id' => ''],
            ['grupo_id' => 24, 'palavra_id' => ''],
            ['grupo_id' => 24, 'palavra_id' => ''],
            ['grupo_id' => 24, 'palavra_id' => ''],


            #Funções de modelo
            ['grupo_id' => 25, 'palavra_id' => ''],
            ['grupo_id' => 25, 'palavra_id' => ''],
            ['grupo_id' => 25, 'palavra_id' => ''],
            ['grupo_id' => 25, 'palavra_id' => ''],


            #Típicos do Rio Grande do Su
            ['grupo_id' => 26, 'palavra_id' => ''],
            ['grupo_id' => 26, 'palavra_id' => ''],
            ['grupo_id' => 26, 'palavra_id' => ''],
            ['grupo_id' => 26, 'palavra_id' => ''],


            #Sobremesas gelada
            ['grupo_id' => 27, 'palavra_id' => ''],
            ['grupo_id' => 27, 'palavra_id' => ''],
            ['grupo_id' => 27, 'palavra_id' => ''],
            ['grupo_id' => 27, 'palavra_id' => ''],


            #Apóstolo
            ['grupo_id' => 28, 'palavra_id' => ''],
            ['grupo_id' => 28, 'palavra_id' => ''],
            ['grupo_id' => 28, 'palavra_id' => ''],
            ['grupo_id' => 28, 'palavra_id' => ''],


            #Olívias famosa
            ['grupo_id' => 29, 'palavra_id' => ''],
            ['grupo_id' => 29, 'palavra_id' => ''],
            ['grupo_id' => 29, 'palavra_id' => ''],
            ['grupo_id' => 29, 'palavra_id' => ''],


            #Critérios para apuração do carnava
            ['grupo_id' => 30, 'palavra_id' => ''],
            ['grupo_id' => 30, 'palavra_id' => ''],
            ['grupo_id' => 30, 'palavra_id' => ''],
            ['grupo_id' => 30, 'palavra_id' => ''],


            #Marsupiai
            ['grupo_id' => 31, 'palavra_id' => ''],
            ['grupo_id' => 31, 'palavra_id' => ''],
            ['grupo_id' => 31, 'palavra_id' => ''],
            ['grupo_id' => 31, 'palavra_id' => ''],


            #Instrumentos musicai
            ['grupo_id' => 32, 'palavra_id' => ''],
            ['grupo_id' => 32, 'palavra_id' => ''],
            ['grupo_id' => 32, 'palavra_id' => ''],
            ['grupo_id' => 32, 'palavra_id' => ''],


            #Especiaria
            ['grupo_id' => 33, 'palavra_id' => ''],
            ['grupo_id' => 33, 'palavra_id' => ''],
            ['grupo_id' => 33, 'palavra_id' => ''],
            ['grupo_id' => 33, 'palavra_id' => ''],


            #Reações comuns a picadas de inseto
            ['grupo_id' => 34, 'palavra_id' => ''],
            ['grupo_id' => 34, 'palavra_id' => ''],
            ['grupo_id' => 34, 'palavra_id' => ''],
            ['grupo_id' => 34, 'palavra_id' => ''],


            #Órgãos do corpo human
            ['grupo_id' => 35, 'palavra_id' => ''],
            ['grupo_id' => 35, 'palavra_id' => ''],
            ['grupo_id' => 35, 'palavra_id' => ''],
            ['grupo_id' => 35, 'palavra_id' => ''],


            #Relacionados a son
            ['grupo_id' => 36, 'palavra_id' => ''],
            ['grupo_id' => 36, 'palavra_id' => ''],
            ['grupo_id' => 36, 'palavra_id' => ''],
            ['grupo_id' => 36, 'palavra_id' => ''],


            #Ratos de desenhos animado
            ['grupo_id' => 37, 'palavra_id' => ''],
            ['grupo_id' => 37, 'palavra_id' => ''],
            ['grupo_id' => 37, 'palavra_id' => ''],
            ['grupo_id' => 37, 'palavra_id' => ''],


            #Quadrinho
            ['grupo_id' => 38, 'palavra_id' => ''],
            ['grupo_id' => 38, 'palavra_id' => ''],
            ['grupo_id' => 38, 'palavra_id' => ''],
            ['grupo_id' => 38, 'palavra_id' => ''],


            #Realizados no hospita
            ['grupo_id' => 39, 'palavra_id' => ''],
            ['grupo_id' => 39, 'palavra_id' => ''],
            ['grupo_id' => 39, 'palavra_id' => ''],
            ['grupo_id' => 39, 'palavra_id' => ''],


            #Os/As três __
            ['grupo_id' => 40, 'palavra_id' => ''],
            ['grupo_id' => 40, 'palavra_id' => ''],
            ['grupo_id' => 40, 'palavra_id' => ''],
            ['grupo_id' => 40, 'palavra_id' => ''],


            #Procedimentos policiai
            ['grupo_id' => 41, 'palavra_id' => ''],
            ['grupo_id' => 41, 'palavra_id' => ''],
            ['grupo_id' => 41, 'palavra_id' => ''],
            ['grupo_id' => 41, 'palavra_id' => ''],


            #Planeta
            ['grupo_id' => 42, 'palavra_id' => ''],
            ['grupo_id' => 42, 'palavra_id' => ''],
            ['grupo_id' => 42, 'palavra_id' => ''],
            ['grupo_id' => 42, 'palavra_id' => ''],


            #Mitologia greg
            ['grupo_id' => 43, 'palavra_id' => ''],
            ['grupo_id' => 43, 'palavra_id' => ''],
            ['grupo_id' => 43, 'palavra_id' => ''],
            ['grupo_id' => 43, 'palavra_id' => ''],


            #Variedades de banana
            ['grupo_id' => 44, 'palavra_id' => ''],
            ['grupo_id' => 44, 'palavra_id' => ''],
            ['grupo_id' => 44, 'palavra_id' => ''],
            ['grupo_id' => 44, 'palavra_id' => ''],


            #Filmes da Disne
            ['grupo_id' => 45, 'palavra_id' => ''],
            ['grupo_id' => 45, 'palavra_id' => ''],
            ['grupo_id' => 45, 'palavra_id' => ''],
            ['grupo_id' => 45, 'palavra_id' => ''],


            #Sinônimos de exposiçã
            ['grupo_id' => 46, 'palavra_id' => ''],
            ['grupo_id' => 46, 'palavra_id' => ''],
            ['grupo_id' => 46, 'palavra_id' => ''],
            ['grupo_id' => 46, 'palavra_id' => ''],


            #Direitos humano
            ['grupo_id' => 47, 'palavra_id' => ''],
            ['grupo_id' => 47, 'palavra_id' => ''],
            ['grupo_id' => 47, 'palavra_id' => ''],
            ['grupo_id' => 47, 'palavra_id' => ''],


            #Árvore
            ['grupo_id' => 48, 'palavra_id' => ''],
            ['grupo_id' => 48, 'palavra_id' => ''],
            ['grupo_id' => 48, 'palavra_id' => ''],
            ['grupo_id' => 48, 'palavra_id' => ''],


            #Bairros de São Paul
            ['grupo_id' => 49, 'palavra_id' => ''],
            ['grupo_id' => 49, 'palavra_id' => ''],
            ['grupo_id' => 49, 'palavra_id' => ''],
            ['grupo_id' => 49, 'palavra_id' => ''],


            #Letras grega
            ['grupo_id' => 50, 'palavra_id' => ''],
            ['grupo_id' => 50, 'palavra_id' => ''],
            ['grupo_id' => 50, 'palavra_id' => ''],
            ['grupo_id' => 50, 'palavra_id' => ''],


            #Peixes de aquári
            ['grupo_id' => 51, 'palavra_id' => ''],
            ['grupo_id' => 51, 'palavra_id' => ''],
            ['grupo_id' => 51, 'palavra_id' => ''],
            ['grupo_id' => 51, 'palavra_id' => ''],


            #Emite sons de animai
            ['grupo_id' => 52, 'palavra_id' => ''],
            ['grupo_id' => 52, 'palavra_id' => ''],
            ['grupo_id' => 52, 'palavra_id' => ''],
            ['grupo_id' => 52, 'palavra_id' => ''],


            #Personagens de Pulp Fictio
            ['grupo_id' => 53, 'palavra_id' => ''],
            ['grupo_id' => 53, 'palavra_id' => ''],
            ['grupo_id' => 53, 'palavra_id' => ''],
            ['grupo_id' => 53, 'palavra_id' => ''],


            #Tubérculo
            ['grupo_id' => 54, 'palavra_id' => ''],
            ['grupo_id' => 54, 'palavra_id' => ''],
            ['grupo_id' => 54, 'palavra_id' => ''],
            ['grupo_id' => 54, 'palavra_id' => ''],


            #Indumentária rea
            ['grupo_id' => 55, 'palavra_id' => ''],
            ['grupo_id' => 55, 'palavra_id' => ''],
            ['grupo_id' => 55, 'palavra_id' => ''],
            ['grupo_id' => 55, 'palavra_id' => ''],


            #Cargos auxiliare
            ['grupo_id' => 56, 'palavra_id' => ''],
            ['grupo_id' => 56, 'palavra_id' => ''],
            ['grupo_id' => 56, 'palavra_id' => ''],
            ['grupo_id' => 56, 'palavra_id' => ''],


            #Cães de desenhos animado
            ['grupo_id' => 57, 'palavra_id' => ''],
            ['grupo_id' => 57, 'palavra_id' => ''],
            ['grupo_id' => 57, 'palavra_id' => ''],
            ['grupo_id' => 57, 'palavra_id' => ''],


            #Jogos de baralh
            ['grupo_id' => 58, 'palavra_id' => ''],
            ['grupo_id' => 58, 'palavra_id' => ''],
            ['grupo_id' => 58, 'palavra_id' => ''],
            ['grupo_id' => 58, 'palavra_id' => ''],


            #Marcas de alimento
            ['grupo_id' => 59, 'palavra_id' => ''],
            ['grupo_id' => 59, 'palavra_id' => ''],
            ['grupo_id' => 59, 'palavra_id' => ''],
            ['grupo_id' => 59, 'palavra_id' => ''],


            #Quem tem boa saúd
            ['grupo_id' => 60, 'palavra_id' => ''],
            ['grupo_id' => 60, 'palavra_id' => ''],
            ['grupo_id' => 60, 'palavra_id' => ''],
            ['grupo_id' => 60, 'palavra_id' => ''],


            #Calm
            ['grupo_id' => 61, 'palavra_id' => ''],
            ['grupo_id' => 61, 'palavra_id' => ''],
            ['grupo_id' => 61, 'palavra_id' => ''],
            ['grupo_id' => 61, 'palavra_id' => ''],


            #Tem no circ
            ['grupo_id' => 62, 'palavra_id' => ''],
            ['grupo_id' => 62, 'palavra_id' => ''],
            ['grupo_id' => 62, 'palavra_id' => ''],
            ['grupo_id' => 62, 'palavra_id' => ''],


            #Quadrilátero
            ['grupo_id' => 63, 'palavra_id' => ''],
            ['grupo_id' => 63, 'palavra_id' => ''],
            ['grupo_id' => 63, 'palavra_id' => ''],
            ['grupo_id' => 63, 'palavra_id' => ''],


            #Tipos de torresm
            ['grupo_id' => 64, 'palavra_id' => ''],
            ['grupo_id' => 64, 'palavra_id' => ''],
            ['grupo_id' => 64, 'palavra_id' => ''],
            ['grupo_id' => 64, 'palavra_id' => ''],


            #Símbolos dos naipes de baralh
            ['grupo_id' => 65, 'palavra_id' => ''],
            ['grupo_id' => 65, 'palavra_id' => ''],
            ['grupo_id' => 65, 'palavra_id' => ''],
            ['grupo_id' => 65, 'palavra_id' => ''],


            #Unt
            ['grupo_id' => 66, 'palavra_id' => ''],
            ['grupo_id' => 66, 'palavra_id' => ''],
            ['grupo_id' => 66, 'palavra_id' => ''],
            ['grupo_id' => 66, 'palavra_id' => ''],


            #Material escola
            ['grupo_id' => 67, 'palavra_id' => ''],
            ['grupo_id' => 67, 'palavra_id' => ''],
            ['grupo_id' => 67, 'palavra_id' => ''],
            ['grupo_id' => 67, 'palavra_id' => ''],


            #Tipos de tinta
            ['grupo_id' => 68, 'palavra_id' => ''],
            ['grupo_id' => 68, 'palavra_id' => ''],
            ['grupo_id' => 68, 'palavra_id' => ''],
            ['grupo_id' => 68, 'palavra_id' => ''],


            #Funções da química inorgânic
            ['grupo_id' => 69, 'palavra_id' => ''],
            ['grupo_id' => 69, 'palavra_id' => ''],
            ['grupo_id' => 69, 'palavra_id' => ''],
            ['grupo_id' => 69, 'palavra_id' => ''],


            #Core
            ['grupo_id' => 70, 'palavra_id' => ''],
            ['grupo_id' => 70, 'palavra_id' => ''],
            ['grupo_id' => 70, 'palavra_id' => ''],
            ['grupo_id' => 70, 'palavra_id' => ''],


            #Fruta
            ['grupo_id' => 71, 'palavra_id' => ''],
            ['grupo_id' => 71, 'palavra_id' => ''],
            ['grupo_id' => 71, 'palavra_id' => ''],
            ['grupo_id' => 71, 'palavra_id' => ''],


            #Partes de uma jaquet
            ['grupo_id' => 72, 'palavra_id' => ''],
            ['grupo_id' => 72, 'palavra_id' => ''],
            ['grupo_id' => 72, 'palavra_id' => ''],
            ['grupo_id' => 72, 'palavra_id' => ''],


            #Tipos de vinagr
            ['grupo_id' => 73, 'palavra_id' => ''],
            ['grupo_id' => 73, 'palavra_id' => ''],
            ['grupo_id' => 73, 'palavra_id' => ''],
            ['grupo_id' => 73, 'palavra_id' => ''],


            #Alimentos ricos em proteína
            ['grupo_id' => 74, 'palavra_id' => ''],
            ['grupo_id' => 74, 'palavra_id' => ''],
            ['grupo_id' => 74, 'palavra_id' => ''],
            ['grupo_id' => 74, 'palavra_id' => ''],


            #Produtos de higiene pessoa
            ['grupo_id' => 75, 'palavra_id' => ''],
            ['grupo_id' => 75, 'palavra_id' => ''],
            ['grupo_id' => 75, 'palavra_id' => ''],
            ['grupo_id' => 75, 'palavra_id' => ''],


            #Bebidas quente
            ['grupo_id' => 76, 'palavra_id' => ''],
            ['grupo_id' => 76, 'palavra_id' => ''],
            ['grupo_id' => 76, 'palavra_id' => ''],
            ['grupo_id' => 76, 'palavra_id' => ''],


            #___ em pó / Barra de __
            ['grupo_id' => 77, 'palavra_id' => ''],
            ['grupo_id' => 77, 'palavra_id' => ''],
            ['grupo_id' => 77, 'palavra_id' => ''],
            ['grupo_id' => 77, 'palavra_id' => ''],


            #Pé de __
            ['grupo_id' => 78, 'palavra_id' => ''],
            ['grupo_id' => 78, 'palavra_id' => ''],
            ['grupo_id' => 78, 'palavra_id' => ''],
            ['grupo_id' => 78, 'palavra_id' => ''],


            #Apoderaçã
            ['grupo_id' => 79, 'palavra_id' => ''],
            ['grupo_id' => 79, 'palavra_id' => ''],
            ['grupo_id' => 79, 'palavra_id' => ''],
            ['grupo_id' => 79, 'palavra_id' => ''],


            #Pacote turístico
            ['grupo_id' => 80, 'palavra_id' => ''],
            ['grupo_id' => 80, 'palavra_id' => ''],
            ['grupo_id' => 80, 'palavra_id' => ''],
            ['grupo_id' => 80, 'palavra_id' => ''],


            #Materiais elétricos
            ['grupo_id' => 81, 'palavra_id' => ''],
            ['grupo_id' => 81, 'palavra_id' => ''],
            ['grupo_id' => 81, 'palavra_id' => ''],
            ['grupo_id' => 81, 'palavra_id' => ''],


            #Tabefe
            ['grupo_id' => 82, 'palavra_id' => ''],
            ['grupo_id' => 82, 'palavra_id' => ''],
            ['grupo_id' => 82, 'palavra_id' => ''],
            ['grupo_id' => 82, 'palavra_id' => ''],


            #Estádio de futebol
            ['grupo_id' => 83, 'palavra_id' => ''],
            ['grupo_id' => 83, 'palavra_id' => ''],
            ['grupo_id' => 83, 'palavra_id' => ''],
            ['grupo_id' => 83, 'palavra_id' => ''],


            #Guloseimas
            ['grupo_id' => 84, 'palavra_id' => ''],
            ['grupo_id' => 84, 'palavra_id' => ''],
            ['grupo_id' => 84, 'palavra_id' => ''],
            ['grupo_id' => 84, 'palavra_id' => ''],


            #Produtos para pets
            ['grupo_id' => 85, 'palavra_id' => ''],
            ['grupo_id' => 85, 'palavra_id' => ''],
            ['grupo_id' => 85, 'palavra_id' => ''],
            ['grupo_id' => 85, 'palavra_id' => ''],


            #Cidades Gaúchas
            ['grupo_id' => 86, 'palavra_id' => ''],
            ['grupo_id' => 86, 'palavra_id' => ''],
            ['grupo_id' => 86, 'palavra_id' => ''],
            ['grupo_id' => 86, 'palavra_id' => ''],

            
        ]);
    }
}
