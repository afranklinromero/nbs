<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    //
    protected $table = 'concurso';

    public function configuracion(){
        return $this->belongsTo('App\Modelos\Configuracion', 'configuracion_id','id');
    }

    public function clasificaciones(){
        return $this->hasMany('App\Modelos\Clasificacion');
    }
}
