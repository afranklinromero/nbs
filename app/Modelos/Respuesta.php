<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $table = 'respuesta';
    protected $fillable = ['pregunta_id', 'respuesta', 'escorrecta'];

    public function pregunta(){
        return $this->belongsTo('App\Modelos\Pregunta', 'pregunta','id');
    }
}
