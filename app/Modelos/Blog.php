<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blog';
    protected $fillable = ['user_id', 'titulo', 'multimedia', 'contenido', 'autor', 'referencia', 'estado'];
}
