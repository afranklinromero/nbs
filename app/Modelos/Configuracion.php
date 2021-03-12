<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    //
    protected $table = 'configuracion';
    protected $fillable = ['nropreguntas', 'limiterespuestaserroneas', 'puntosporrespuesta', 'tiempolimite'];
}
