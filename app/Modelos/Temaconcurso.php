<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Temaconcurso extends Model
{
    //
    protected $table = 'temaconcurso';

    public function tema(){
        return $this->belongsTo('App\Modelos\Tema', 'tema_id','id');
    }

    public function concurso(){
        return $this->belongsTo('App\Modelos\Concurso', 'concurso_id','id');
    }

    public function concurso_id(){
        return $this->belongsTo('App\Modelos\Concurso', 'concurso_id','id');
    }
}
