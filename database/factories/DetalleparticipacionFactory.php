<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Detalleparticipacion;
use App\Modelos\Participacion;
use App\Modelos\Pregunta;
use App\Modelos\Respuesta;
use Faker\Generator as Faker;

$factory->define(Detalleparticipacion::class, function (Faker $faker) {
    return [
        //
        'participacion_id' => Participacion::all('id')->random(),
        'pregunta_id' => Pregunta::all('id')->random(),
        'respuesta_id' => Respuesta::all('id')->random(),
        'escorrecto' => $faker->numberBetween(0,1),
    ];
});
