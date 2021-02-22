<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //

    public function tema(){
        return $this->belongsTo('App\Modelos\Tema', 'tema_id','id');
    }

    protected $table = 'pregunta';

    public function respuestas()
    {
        return $this->hasMany('App\Modelos\Respuesta');
    }
}
