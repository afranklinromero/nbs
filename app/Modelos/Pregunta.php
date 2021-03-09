<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $table = 'pregunta';
    protected $fillable = ['user_id', 'pregunta', 'tema_id', 'estado'];

    protected $with = ['respuestas'];

    protected $withCount = ['respuestas'];

    public function tema(){
        return $this->belongsTo('App\Modelos\Tema', 'tema_id','id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id','id');
    }


    public function respuestas()
    {
        return $this->hasMany('App\Modelos\Respuesta');
    }
}
