<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $table = 'respuesta';
    protected $fillable = ['pregunta_id', 'respuesta', 'escorrecta'];

    protected $dates = ['created_at', 'updated_at'];

    public function pregunta(){
        return $this->belongsTo('App\Modelos\Pregunta', 'pregunta','id');
    }
}
