<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    //
    protected $table = 'participacion';

    public function concurso(){
        return $this->belongsTo('App\Modelos\Concurso', 'concurso_id','id');
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'user_id','id');
    }
}
