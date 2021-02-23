<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $table = 'pregunta';
    protected $fillable = ['pregunta', 'tema_id', 'respuestas'];

    public function tema(){
        return $this->belongsTo('App\Modelos\Tema', 'tema_id','id');
    }


    public function respuestas()
    {
        return $this->hasMany('App\Modelos\Respuesta');
    }
}
