<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    public function palavras() 
    {
        // return $this->hasMany(Palavra::class);
        return $this->belongsToMany(Palavra::class, 'grupos_palavras', 'grupo_id', 'palavra_id');
    }
}
