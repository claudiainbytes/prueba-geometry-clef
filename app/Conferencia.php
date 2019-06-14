<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conferencia extends Model
{
    protected $table = "conferencias";
    protected $primaryKey = "id";
    protected $fillable = ['titulo','imagen','video','descripcion'];

    public function usuario_conferencia()
    {
        return $this->hasMany('App\UsuarioConferencia');
    }
}