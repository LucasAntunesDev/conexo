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

    public function grupo($grupo_palavra){
        return Grupo::find($grupo_palavra->grupo_id)->nome ;
    }
    
}
