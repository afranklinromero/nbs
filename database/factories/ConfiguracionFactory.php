<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Configuracion;
use Faker\Generator as Faker;

$factory->define(Configuracion::class, function (Faker $faker) {
    return [
        //
        'nropreguntas' => '10',
        'limiterespuestaserroneas' => '10',
        'puntosporrespuesta' => '1',
        'tiempolimite' => '60',
    ];
});
