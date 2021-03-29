<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    //
    protected $table = 'concurso';
    protected $fillable = ['user_id', 'configuracion_id', 'nombre', 'descripcion', 'picture', 'fechaini', 'fechafin', 'estado'];
    protected $dates = ['created_at', 'updated_at', 'fechaini', 'fechafin'];
    public function configuracion(){
        return $this->belongsTo('App\Modelos\Configuracion', 'configuracion_id','id');
    }

    public function clasificaciones(){
        return $this->hasMany('App\Modelos\Clasificacion');
    }
}
