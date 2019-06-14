<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{

    protected $guard = 'usuario';
    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $fillable = ['nombres','apellidos','email','password','empresa','cargo','direccion','ciudad','telefono'];

    public function usuario_conferencia()
    {
        return $this->hasMany('App\UsuarioConferencia');
    }
}