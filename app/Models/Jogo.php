<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model {
    protected $fillable = [
        'nome',
        'grupo_1_id',
        'grupo_2_id',
        'grupo_3_id',
        'grupo_4_id',
        'grupo_1_palavras',
        'grupo_2_palavras',
        'grupo_3_palavras',
        'grupo_4_palavras',
        'data'
    ];
    use HasFactory;

    public function formatarData($data, $formato = 'd/m/Y'){
        return Carbon::parse($data)->format($formato);
        //  {{ Carbon\Carbon::parse($jogo->data)->format('d/m/Y')}} 
    }
}
