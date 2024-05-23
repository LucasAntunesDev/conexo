<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GruposSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('grupos')->insert([
            ['id' => 9, 'nome' => 'Personagens que usam verde', 'disciplina_id' => 1],
            ['id' => 10, 'nome' => 'Temperos', 'disciplina_id' => 1],
            ['id' => 11, 'nome' => 'Internet', 'disciplina_id' => 1],
            ['id' => 12, 'nome' => 'Meios de comunicação obsoletos', 'disciplina_id' => 1],
            ['id' => 13, 'nome' => 'Adjetivos relativos a freqência', 'disciplina_id' => 1],
            ['id' => 14, 'nome' => 'Itens de papelaria', 'disciplina_id' => 1],
            ['id' => 15, 'nome' => 'Cosméticos labiais', 'disciplina_id' => 1],
            ['id' => 16, 'nome' => 'Carnaval', 'disciplina_id' => 1],
            ['id' => 17, 'nome' => 'Ritmos musicais', 'disciplina_id' => 1],
            ['id' => 18, 'nome' => 'Enorme', 'disciplina_id' => 1],
            ['id' => 19, 'nome' => 'Clássicos literários', 'disciplina_id' => 1],
            ['id' => 20, 'nome' => 'Roda (de) ___', 'disciplina_id' => 1],
            ['id' => 21, 'nome' => 'Usados no jardim', 'disciplina_id' => 1],
            ['id' => 22, 'nome' => 'Inteligente', 'disciplina_id' => 1],
            ['id' => 23, 'nome' => 'Pássaros', 'disciplina_id' => 1],
            ['id' => 24, 'nome' => 'Funções de modelos', 'disciplina_id' => 1],
            ['id' => 25, 'nome' => 'Típicos do Rio Grande do Sul', 'disciplina_id' => 1],
            ['id' => 26, 'nome' => 'Sobremesas geladas', 'disciplina_id' => 1],
            ['id' => 27, 'nome' => 'Apóstolos', 'disciplina_id' => 1],
            ['id' => 28, 'nome' => 'Olívias famosas', 'disciplina_id' => 1],
            ['id' => 29, 'nome' => 'Critérios para apuração do carnaval', 'disciplina_id' => 1],
            ['id' => 30, 'nome' => 'Marsupiais', 'disciplina_id' => 1],
            ['id' => 31, 'nome' => 'Instrumentos musicais', 'disciplina_id' => 1],
            ['id' => 32, 'nome' => 'Especiarias', 'disciplina_id' => 1],
            ['id' => 33, 'nome' => 'Reações comuns a picadas de insetos', 'disciplina_id' => 1],
            ['id' => 34, 'nome' => 'Órgãos do corpo humano', 'disciplina_id' => 1],
            ['id' => 35, 'nome' => 'Relacionados a sons', 'disciplina_id' => 1],
            ['id' => 36, 'nome' => 'Ratos de desenhos animados', 'disciplina_id' => 1],
            ['id' => 37, 'nome' => 'Quadrinhos', 'disciplina_id' => 1],
            ['id' => 38, 'nome' => 'Realizados no hospital', 'disciplina_id' => 1],
            ['id' => 39, 'nome' => 'Os/As três ___', 'disciplina_id' => 1],
            ['id' => 40, 'nome' => 'Procedimentos policiais', 'disciplina_id' => 1],
            ['id' => 41, 'nome' => 'Planetas', 'disciplina_id' => 1],
            ['id' => 42, 'nome' => 'Mitologia grega', 'disciplina_id' => 1],
            ['id' => 43, 'nome' => 'Variedades de bananas', 'disciplina_id' => 1],
            ['id' => 44, 'nome' => 'Filmes da Disney', 'disciplina_id' => 1],
            ['id' => 45, 'nome' => 'Sinônimos de exposição', 'disciplina_id' => 1],
            ['id' => 46, 'nome' => 'Direitos humanos', 'disciplina_id' => 1],
            ['id' => 47, 'nome' => 'Árvores', 'disciplina_id' => 1],
            ['id' => 48, 'nome' => 'Bairros de São Paulo', 'disciplina_id' => 1],
            ['id' => 49, 'nome' => 'Letras gregas', 'disciplina_id' => 1],
            ['id' => 50, 'nome' => 'Peixes de aquário', 'disciplina_id' => 1],
            ['id' => 51, 'nome' => 'Emite sons de animais', 'disciplina_id' => 1],
            ['id' => 52, 'nome' => 'Personagens de Pulp Fiction', 'disciplina_id' => 1],
            ['id' => 53, 'nome' => 'Tubérculos', 'disciplina_id' => 1],
            ['id' => 54, 'nome' => 'Indumentária real', 'disciplina_id' => 1],
            ['id' => 55, 'nome' => 'Cargos auxiliares', 'disciplina_id' => 1],
            ['id' => 56, 'nome' => 'Cães de desenhos animados', 'disciplina_id' => 1],
            ['id' => 57, 'nome' => 'Jogos de baralho', 'disciplina_id' => 1],
            ['id' => 58, 'nome' => 'Marcas de alimentos', 'disciplina_id' => 1],
            ['id' => 59, 'nome' => 'Quem tem boa saúde', 'disciplina_id' => 1],
            ['id' => 60, 'nome' => 'Calma', 'disciplina_id' => 1],
            ['id' => 61, 'nome' => 'Fontes de energia', 'disciplina_id' => 1],
            ['id' => 62, 'nome' => 'Participantes num processo judicial', 'disciplina_id' => 1],
            ['id' => 63, 'nome' => 'Notas musicais', 'disciplina_id' => 1],
            ['id' => 64, 'nome' => 'Advérbios de lugar', 'disciplina_id' => 1],
            ['id' => 65, 'nome' => 'Fórmula 1', 'disciplina_id' => 1],
            ['id' => 66, 'nome' => '__ vermelho', 'disciplina_id' => 1],
            ['id' => 67, 'nome' => 'Chocolates da Garoto 1', 'disciplina_id' => 1],
            ['id' => 68, 'nome' => 'Ilhas Famosas', 'disciplina_id' => 1],
            ['id' => 69, 'nome' => 'Enfeite', 'disciplina_id' => 2], 
            ['id' => 70, 'nome' => 'Reinos Biológicos', 'disciplina_id' => 2],
            ['id' => 71, 'nome' => 'Sinônimos de Vínculo', 'disciplina_id' => 2],
            ['id' => 72, 'nome' => 'RPG', 'disciplina_id' => 2],
            ['id' => 73, 'nome' => 'Sociólogos', 'disciplina_id' => 2],
        ]);
    }
}
