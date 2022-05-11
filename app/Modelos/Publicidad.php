<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    //
    protected $table = 'publicidad';
    protected $fillable = ['user_id', 'titulo', 'imagen', 'contenido', 'link', 'fechaini', 'fechafin', 'lugar',  'estado'];
    protected $dates = ['created_at', 'updated_at', 'fechaini', 'fechafin'];
}
