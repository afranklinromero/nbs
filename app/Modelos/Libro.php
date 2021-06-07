<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $table = 'libro';

    protected $fillable = ['user_id', 'titulo', 'fecha', 'tapa', 'documentopdf', 'autor', 'edicion', 'serie', 'nropublicacion', 'lugarpublicacion'];
    
    public function marcadores()
    {
        return $this->hasMany('App\Modelos\Marcador');
    }
}
