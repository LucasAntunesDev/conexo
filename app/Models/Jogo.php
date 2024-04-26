<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model {
    protected $fillable = [
        'categoria_1_id',
        'categoria_2_id',
        'categoria_3_id',
        'categoria_4_id'
    ];
    use HasFactory;
}
