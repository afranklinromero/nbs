<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class SugerenciasNBS extends Model
{
    //
    protected $table = 'sugerenciasnbs';
    protected $fillable = ['name', 'email', 'subject', 'content'];

    /*
    public function user(){
        return $this->belongsTo('App\User', 'user_id','id');
    }
    */
}
