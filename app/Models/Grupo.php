<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    public function palavras() 
    {
        return $this->belongsToMany(Palavra::class, 'grupos_palavras', 'grupo_id', 'palavra_id');
    }

    public function disciplina($grupo_disciplina) {
        // return $this->belongsToMany(Disciplina::class, 'grupos_disciplinas', 'grupo_id', 'disciplina_id');
        return $this::find($grupo_disciplina->grupo_id)->nome;
    }

}