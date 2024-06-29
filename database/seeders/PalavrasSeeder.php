<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PalavrasSeeder extends Seeder {

    public function run(): void {
        DB::table('palavras')->insert([

            // 'ReactHooks' => [
            ['id' => 1, 'nome' => 'useState'],
            ['id' => 2, 'nome' => 'useEffect'],
            ['id' => 3, 'nome' => 'useCallback'],
            ['id' => 4, 'nome' => 'useContext'],
            ['id' => 5, 'nome' => 'useReducer'],
            ['id' => 6, 'nome' => 'useRef'],
            ['id' => 7, 'nome' => 'useMemo'],
            ['id' => 8, 'nome' => 'useLayoutEffect'],
            ['id' => 9, 'nome' => 'useDebugValue'],
            ['id' => 10, 'nome' => 'useImperativeHandle'],

            // 'ComandosSQL' => [
            ['id' => 11, 'nome' => 'SELECT'],
            ['id' => 12, 'nome' => 'DELETE'],
            ['id' => 13, 'nome' => 'UPDATE'],
            ['id' => 14, 'nome' => 'INSERT'],
            ['id' => 15, 'nome' => 'CREATE'],
            ['id' => 16, 'nome' => 'DROP'],
            ['id' => 17, 'nome' => 'ALTER'],
            ['id' => 18, 'nome' => 'TRUNCATE'],
            ['id' => 19, 'nome' => 'JOIN'],
            ['id' => 20, 'nome' => 'GRANT'],

            // 'TagsHTML' => [
            ['id' => 21, 'nome' => 'INPUT'],
            ['id' => 22, 'nome' => 'DIV'],
            ['id' => 23, 'nome' => 'SPAN'],
            ['id' => 24, 'nome' => 'H1'],
            ['id' => 25, 'nome' => 'P'],
            ['id' => 26, 'nome' => 'A'],
            ['id' => 27, 'nome' => 'BUTTON'],
            ['id' => 28, 'nome' => 'FORM'],
            ['id' => 29, 'nome' => 'IMG'],
            ['id' => 30, 'nome' => 'TABLE'],
            ['id' => 31, 'nome' => 'STYLE'],
            ['id' => 32, 'nome' => 'SCRIPT'],
            ['id' => 33, 'nome' => 'HEADER'],
            ['id' => 34, 'nome' => 'HEAD'],

            // 'EventosJavascript' => [
            ['id' => 35, 'nome' => 'Input'],
            ['id' => 36, 'nome' => 'Update'],
            ['id' => 37, 'nome' => 'Click'],
            ['id' => 38, 'nome' => 'Change'],
            ['id' => 39, 'nome' => 'Submit'],
            ['id' => 40, 'nome' => 'Focus'],
            ['id' => 41, 'nome' => 'Blur'],
            ['id' => 42, 'nome' => 'KeyPress'],
            ['id' => 43, 'nome' => 'Load'],
            ['id' => 44, 'nome' => 'MouseOver'],

            // 'PHP' => [
            ['id' => 45, 'nome' => 'Laravel'],
            ['id' => 46, 'nome' => 'Header'],
            ['id' => 47, 'nome' => 'POST'],
            ['id' => 48, 'nome' => 'GET'],
            ['id' => 49, 'nome' => 'PUT'],
            ['id' => 50, 'nome' => 'DELETE'],
            ['id' => 51, 'nome' => 'Cookies'],
            ['id' => 52, 'nome' => 'Sessions'],
            ['id' => 53, 'nome' => 'Classe'],
            ['id' => 54, 'nome' => 'Objeto'],
            ['id' => 55, 'nome' => 'Interface'],
            ['id' => 56, 'nome' => 'Twig'],
            ['id' => 57, 'nome' => 'Foreach'],
            ['id' => 58, 'nome' => 'Array'],
            ['id' => 59, 'nome' => 'Fetch'],

            // 'BibliotecasEFrameworks' => [

            ['id' => 60, 'nome' => 'Tailwind'],
            ['id' => 61, 'nome' => 'React'],
            ['id' => 62, 'nome' => 'Laravel'],
            ['id' => 63, 'nome' => 'Bootstrap'],
            ['id' => 64, 'nome' => 'JQuery'],
            ['id' => 65, 'nome' => 'Twig'],

            // 'CSS' => [
            ['id' => 66, 'nome' => 'Tailwind'],
            ['id' => 67, 'nome' => 'Style'],
            ['id' => 68, 'nome' => 'Width'],
            ['id' => 69, 'nome' => 'Height'],
            ['id' => 70, 'nome' => 'Border'],
            ['id' => 71, 'nome' => 'Hover'],
            ['id' => 72, 'nome' => 'Focus'],
            ['id' => 73, 'nome' => 'Flex'],

            // 'Javascript' => [
            ['id' => 74, 'nome' => 'React'],
            ['id' => 75, 'nome' => 'JQuery'],
            ['id' => 76, 'nome' => 'Funções'],
            ['id' => 77, 'nome' => 'Foreach'],
            ['id' => 78, 'nome' => 'Objeto'],
            ['id' => 79, 'nome' => 'Array'],
            ['id' => 80, 'nome' => 'Alert'],
            ['id' => 81, 'nome' => 'Fetch'],

            // 'MetodosHTTP' => [
            ['id' => 82, 'nome' => 'DELETE'],
            ['id' => 83, 'nome' => 'GET'],
            ['id' => 84, 'nome' => 'POST'],
            ['id' => 85, 'nome' => 'PUT'],
            ['id' => 86, 'nome' => 'PATCH'],
            ['id' => 87, 'nome' => 'OPTIONS'],
            ['id' => 88, 'nome' => 'HEAD'],
            ['id' => 89, 'nome' => 'TRACE'],
            ['id' => 90, 'nome' => 'CONNECT'],
            ['id' => 91, 'nome' => 'SEARCH'],

            // 'ProtocolosDeRedes' => [
            ['id' => 92, 'nome' => 'SMTP'],
            ['id' => 93, 'nome' => 'UDP'],
            ['id' => 94, 'nome' => 'FTP'],
            ['id' => 95, 'nome' => 'TCP'],
            ['id' => 96, 'nome' => 'HTTP'],
            ['id' => 97, 'nome' => 'SSH'],
            ['id' => 98, 'nome' => 'DNS'],
            ['id' => 99, 'nome' => 'ICMP'],
            ['id' => 100, 'nome' => 'ARP'],
            ['id' => 101, 'nome' => 'SNMP'],

            // 'TiposDeRegistroDeRecursoDoDNS' => [
            ['id' => 102, 'nome' => 'AA'],
            ['id' => 103, 'nome' => 'MX'],
            ['id' => 104, 'nome' => 'NS'],
            ['id' => 105, 'nome' => 'CNAME'],

            // 'OrientacaoAObjetos' => [
            ['id' => 106, 'nome' => 'Composição'],
            ['id' => 107, 'nome' => 'Agregação'],
            ['id' => 108, 'nome' => 'Dependência'],
            ['id' => 109, 'nome' => 'Herança'],
            ['id' => 110, 'nome' => 'Polimorfismo'],
            ['id' => 111, 'nome' => 'Encapsulamento'],
            ['id' => 112, 'nome' => 'Abstração'],
            ['id' => 113, 'nome' => 'Classe'],
            ['id' => 114, 'nome' => 'Objeto'],
            ['id' => 115, 'nome' => 'Interface'],

        ]);
    }
}
