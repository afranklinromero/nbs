<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Marcador extends Model
{
    //
    protected $table = 'marcador';

    public function libro(){
        return $this->belongsTo('App\Modelos\Libro', 'libro_id','id');
    }
}
