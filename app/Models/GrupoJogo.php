<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoJogo extends Model
{
    protected $table = 'grupos_jogos';

    protected $fillable = [
        'jogo_id',
        'grupo_id',
        'palavra_id'
    ];
    
    use HasFactory;
}
