<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class SugerenciasNBS extends Model
{
    //
    protected $table = 'sugerenciasnbs';
    protected $fillable = ['name', 'email', 'subject', 'content'];
}
