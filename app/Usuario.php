<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function getUsuario()
    {
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }
}
