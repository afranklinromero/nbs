<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $table = 'libro';
    
    public function marcadores()
    {
        return $this->hasMany('App\Modelos\Marcador');
    }
}
