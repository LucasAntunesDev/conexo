<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Professor extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    protected $table = 'professores';
    protected $fillable = ['nome', 'login', 'senha'];

    public function getAuthPassword()
    {
        return $this->senha;
    }
    
public function getAuthIdentifierName()
{
    return 'login';
}


}
