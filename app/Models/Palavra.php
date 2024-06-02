<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palavra extends Model
{
    use HasFactory;

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupos_palavras', 'palavra_id', 'grupo_id');
    }
    
}
