<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class LoginModel extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $table = 'tb_usuarios';

    protected $fillable = [
        'nomeUsuario',
        'emailUsuario',
        'senhaUsuario',
    ];

    protected $hidden = [
        'senhaUsuario',
    ];

    public function getAuthPassword()
    {
        return $this->senhaUsuario;
    }

    public function getAuthIdentifierName()
    {
        return 'emailUsuario';
    }
}
