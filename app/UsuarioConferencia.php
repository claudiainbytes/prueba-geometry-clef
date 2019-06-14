<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioConferencia extends Model
{
    protected $table = "usuarios_conferencias";
    protected $primaryKey = "id";
    protected $fillable = ['usuario_id','conferencia_id','total_rep'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function conferencia()
    {
        return $this->belongsTo('App\Conferencia');
    }
}
