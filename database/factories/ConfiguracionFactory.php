<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Configuracion;
use Faker\Generator as Faker;

$factory->define(Configuracion::class, function (Faker $faker) {
    return [
        //
        'nropreguntas' => '10',
        'limiterespuestaserroneas' => '0',
        'puntosporrespuesta' => '1',
        'tiempo' => '60',
    ];
});
