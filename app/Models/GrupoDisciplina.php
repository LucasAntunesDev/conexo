<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoDisciplina extends Model
{
    protected $table = 'grupos_disciplinas';

    protected $fillable = [
        'disciplina_id',
        'grupo_id'
    ];
    
    use HasFactory;
}
