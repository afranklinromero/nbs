<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuestasugerencia extends Model
{
    //
    protected $table = 'respuestasugerencia';
    protected $fillable = ['sugerencianbs_id', 'respuesta', 'estado'];
    protected $dates = ['updated_at', 'created_at'];

    public function sugerencianbs()
    {
        return $this->belongsTo(SugerenciasNBS::class);
    }
}
