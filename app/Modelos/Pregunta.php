<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $table = 'pregunta';

    public function respuestas()
    {
        return $this->hasMany('App\Modelos\Respuesta');
    }
}
