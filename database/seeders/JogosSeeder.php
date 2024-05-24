<?php

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
                        [
                                'nome' => '1',
                                'id' => 1,
                                'grupo_1_id' => 25,
                                'grupo_2_id' => 31,
                                'grupo_3_id' => 42,
                                'grupo_4_id' => 52,
                                'grupo_1_palavras' => 'Churrasco,Bombacha, Chimarrão, Carreteiro',
                                'grupo_2_palavras' => 'Cravo, Flauta, Triângulo, Tambor',
                                'grupo_3_palavras' => 'Atenas,
Afrodite,
    Zeus,
    Hades',
                                'grupo_4_palavras' => 'Vincent,
Jules,
    Zed,
    Mia',
                                'data' => '2024-05-04',
                                'created_at' => '2024-05-04 18:28:11',
                                'updated_at' => '2024-05-04 18:28:11'
                        ],



                        [
                                'nome' => '2',
                                'id' => 2,
                                'grupo_1_id' => 24,
                                'grupo_2_id' => 31,
                                'grupo_3_id' => 34,
                                'grupo_4_id' => 46,
                                'grupo_1_palavras' => 'An?ncio,
 Desfile,
    Book,
    Evento',
                                'grupo_2_palavras' => 'Tri?ngulo,
 Cravo,
    Tambor,
    Flauta',
                                'grupo_3_palavras' => 'Cora??o,
 Pele,
    F ? gado,
    Est ? mago',
                                'grupo_4_palavras' => 'Liberdade,
 Igualdade,
    Vida,
    Seguran ? a',
                                'data' => '2024-05-03',
                                'created_at' => '2024-05-04 18:33:36',
                                'updated_at' => '2024-05-04 18:33:36'
                        ],



                        [
                                'nome' => '3',
                                'id' => 3,
                                'grupo_1_id' => 15,
                                'grupo_2_id' => 22,
                                'grupo_3_id' => 39,
                                'grupo_4_id' => 62,
                                'grupo_1_palavras' => 'Gloss,
 B ? lsamo,
        Tint,
        Batom',
                                'grupo_2_palavras' => 'Perspicaz,
 Esperta,
        H ? bil,
        Astuta',
                                'grupo_3_palavras' => 'Marias,
 Patetas,
        Porquinhos,
        Espi ? s',
                                'grupo_4_palavras' => 'R?,
 Testemunha,
        Autora,
        Ju ? za',
                                'data' => '2024-05-02',
                                'created_at' => '2024-05-04 18:33:42',
                                'updated_at' => '2024-05-04 18:33:42'
                        ],



                        [
                                'nome' => '4',
                                'id' => 4,
                                'grupo_1_id' => 13,
                                'grupo_2_id' => 24,
                                'grupo_3_id' => 41,
                                'grupo_4_id' => 43,
                                'grupo_1_palavras' => 'Mensal,
 Anual,
        Semestral,
        Semanal',
                                'grupo_2_palavras' => 'Evento,
 An ? ncio,
        Desfile,
        Book',
                                'grupo_3_palavras' => 'Terra,
 Marte,
        V ? nus,
        Saturno',
                                'grupo_4_palavras' => 'Nanica,
 Ma ??,
        Prata,
        Plantain',
                                'data' => '2024-04-01',
                                'created_at' => '2024-05-04 18:36:50',
                                'updated_at' => '2024-05-04 18:36:50'
                        ],



                        [
                                'nome' => '5',
                                'id' => 5,
                                'grupo_1_id' => 14,
                                'grupo_2_id' => 24,
                                'grupo_3_id' => 54,
                                'grupo_4_id' => 56,
                                'grupo_1_palavras' => 'Agenda,
 Bloco,
        Di ? rio,
        Planner',
                                'grupo_2_palavras' => 'Book,
 An ? ncio,
        Desfile,
        Evento',
                                'grupo_3_palavras' => 'Manto,
 T ? nica,
        Coroa,
        Cetro',
                                'grupo_4_palavras' => 'Ajudante,
 Brian,
        Coragem,
        Scooby',
                                'data' => '2024-04-06',
                                'created_at' => '2024-05-04 18:36:58',
                                'updated_at' => '2024-05-04 18:36:58'
                        ],



                        [
                                'nome' => '6',
                                'id' => 6,
                                'grupo_1_id' => 16,
                                'grupo_2_id' => 29,
                                'grupo_3_id' => 30,
                                'grupo_4_id' => 35,
                                'grupo_1_palavras' => 'M?scara,
 Baile,
        Marchinha,
        Escola',
                                'grupo_2_palavras' => 'Comiss?o,
 Bateria,
        Harmonia,
        Evolu ?? o',
                                'grupo_3_palavras' => 'Cu?ca,
 Coala,
        Diabo,
        Vombate',
                                'grupo_4_palavras' => 'Frequ?ncia,
 Volume,
        Timbre,
        Tom',
                                'data' => '2024-05-05',
                                'created_at' => '2024-05-05 06:32:29',
                                'updated_at' => '2024-05-05 06:32:29'
                        ],



                        [
                                'nome' => '7',
                                'id' => 7,
                                'grupo_1_id' => 10,
                                'grupo_2_id' => 13,
                                'grupo_3_id' => 14,
                                'grupo_4_id' => 50,
                                'grupo_1_palavras' => 'Coentro,
 Tomilho,
        Or ? gano,
        S ? lvia',
                                'grupo_2_palavras' => 'Semanal,
 Semestral,
        Mensal,
        Anual',
                                'grupo_3_palavras' => 'Agenda,
 Di ? rio,
        Bloco,
        Planner',
                                'grupo_4_palavras' => 'Zebra,
 Anjo,
        Cascudo,
        Palha ? o',
                                'data' => '2024-05-17',
                                'created_at' => '2024-05-17 19:23:29',
                                'updated_at' => '2024-05-17 19:23:29'
                        ],



                        [
                                'nome' => '8',
                                'id' => 8,
                                'grupo_1_id' => 34,
                                'grupo_2_id' => 44,
                                'grupo_3_id' => 50,
                                'grupo_4_id' => 60,
                                'grupo_1_palavras' => 'F?gado,
 Pele,
        Cora ?? o,
        Est ? mago',
                                'grupo_2_palavras' => 'H?rcules,
 Corcunda,
        D ? lmatas,
        Pin ? quio',
                                'grupo_3_palavras' => 'Zebra,
 Cascudo,
        Anjo,
        Palha ? o',
                                'grupo_4_palavras' => 'Serenidade,
 Pacatez,
        Tranquilidade,
        Mansid ? o',
                                'data' => '2024-05-20',
                                'created_at' => '2024-05-20 15:02:07',
                                'updated_at' => '2024-05-20 15:02:07'
                        ],



                        [
                                'nome' => '9',
                                'id' => 9,
                                'grupo_1_id' => 16,
                                'grupo_2_id' => 18,
                                'grupo_3_id' => 36,
                                'grupo_4_id' => 57,
                                'grupo_1_palavras' => 'Marchinha,
 Baile,
        Escola,
        M ? scara',
                                'grupo_2_palavras' => 'Tit?nico,
 Monumental,
        Imenso,
        Colossal',
                                'grupo_3_palavras' => 'Mickey,
 C ? rebro,
        Comich ? o,
        Jerry',
                                'grupo_4_palavras' => 'Buraco,
 Paci ? ncia,
        Poker,
        Truco',
                                'data' => '2024-05-21',
                                'created_at' => '2024-05-21 12:24:45',
                                'updated_at' => '2024-05-21 12:24:45'
                        ],



                        [
                                'nome' => '10',
                                'id' => 10,
                                'grupo_1_id' => 14,
                                'grupo_2_id' => 18,
                                'grupo_3_id' => 31,
                                'grupo_4_id' => 43,
                                'grupo_1_palavras' => 'Di?rio,
 Bloco,
        Planner,
        Agenda',
                                'grupo_2_palavras' => 'Tit?nico,
 Colossal,
        Imenso,
        Monumental',
                                'grupo_3_palavras' => 'Tambor,
 Tri ? ngulo,
        Cravo,
        Flauta',
                                'grupo_4_palavras' => 'Ma??,
 Prata,
        Plantain,
        Nanica',
                                'data' => '2024-05-22',
                                'created_at' => '2024-05-22 16:03:38',
                                'updated_at' => '2024-05-22 16:03:38'
                        ],



                        [
                                'nome' => '11',
                                'id' => 11,
                                'grupo_1_id' => 11,
                                'grupo_2_id' => 28,
                                'grupo_3_id' => 56,
                                'grupo_4_id' => 59,
                                'grupo_1_palavras' => 'E-mail,
 Stream,
        Download,
        Website',
                                'grupo_2_palavras' => 'Newton-John,
 Palito,
        Rodrigo,
        Benson',
                                'grupo_3_palavras' => 'Coragem,
 Brian,
        Scooby,
        Ajudante',
                                'grupo_4_palavras' => 'Sadia,
 Forte,
        S ?,
        Saud ? vel',
                                'data' => '2024-05-23',
                                'created_at' => '2024-05-23 13:38:44',
                                'updated_at' => '2024-05-23 13:38:44'
                        ],
                ]);
        }
}
