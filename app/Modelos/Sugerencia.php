<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Sugerencia extends Model
{
    //
    protected $table = 'sugerencia';
    protected $fillable = ['name', 'email', 'subject', 'content'];

    /*
    public function user(){
        return $this->belongsTo('App\User', 'user_id','id');
    }
    */

    public function respuestasugerencias()
    {
        return $this->hasMany(Respuestasugerencia::class, 'id', 'respuestasugerencia_id');
    }
}
