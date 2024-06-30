?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JogosSeeder extends Seeder {
       /**
        * Run the database seeds.
        */
       public function run(): void {
              DB::table('jogos')->insert([
                     ['id' => 1, 'nome' => 'Teste Algorolas', 'grupo_1_id' => 3, 'grupo_2_id' => 4, 'grupo_3_id' => 5, 'grupo_4_id' => 1, 'grupo_1_palavras' => 'Newton,Lançamento oblíquo,Roldana,Luz', 'grupo_2_palavras' => 'Geladeira,Temperatura,Trabalho,Calor', 'grupo_3_palavras' => 'Planck,Heisenberg,Einstein,Stephen Hawking', 'grupo_4_palavras' => 'Raio-x,Micro-ondas,Eletromagnéticas,Som', 'data' => '2024-02-06'],
              ]);
       }
}
