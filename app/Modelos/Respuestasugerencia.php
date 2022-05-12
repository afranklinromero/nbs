<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuestasugerencia extends Model
{
    //
    protected $table = 'respuestasugerencia';
    protected $fillable = ['user_id', 'sugerencia_id', 'respuesta', 'estado'];
    protected $dates = ['updated_at', 'created_at'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id','id');
    }

    public function sugerencianbs()
    {
        return $this->belongsTo(SugerenciasNBS::class);
    }
}
