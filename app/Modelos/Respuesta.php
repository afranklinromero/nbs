<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $table = 'respuesta';

    public function pregunta(){
        return $this->belongsTo('App\Modelos\Pregunta', 'pregunta','id');
    }
}
