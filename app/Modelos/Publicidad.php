<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    //
    protected $table = 'publicidad';
    protected $fillable = ['user_id', 'titulo',  'contenido', 'link', 'estado'];
}
