<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palavra extends Model
{
    use HasFactory;

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categorias_palavras', 'palavra_id', 'categoria_id');
    }
}
