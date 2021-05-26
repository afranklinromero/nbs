<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blog';
    protected $fillable = ['user_id', 'titulo', 'imagen', 'ext', 'documentopdf', 'youtube', 'contenido', 'autor', 'referencia', 'estado'];
}
