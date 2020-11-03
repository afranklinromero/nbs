<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    //
    protected $table = 'clasificacion';

    public function usuario(){
        return $this->belongsTo('App\User', 'user_id','id');
    }

    public function concurso(){
        return $this->belongsTo('App\Modelos\Concurso', 'concurso_id','id');
    }
}
