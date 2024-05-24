<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model {
    use HasFactory;
    public function grupos() {
        return $this->hasMany(Grupo::class);
    }
}

class Grupo extends Model {
    public function disciplina() {
        return $this->belongsTo(Disciplina::class);
    }

    public function palavras() {
        return $this->belongsToMany(Palavra::class, 'grupos_palavras');
    }
}

class Palavra extends Model {
    public function grupos() {
        return $this->belongsToMany(Grupo::class, 'grupos_palavras');
    }
}
