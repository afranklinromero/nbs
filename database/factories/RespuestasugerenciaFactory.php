<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\Modelos\Respuestasugerencia;
use App\Modelos\Sugerencia;
use Faker\Generator as Faker;

$factory->define(Respuestasugerencia::class, function (Faker $faker) {
    $respuestas = [
        'Muchas gracias por sus sugerencias',
        'Muchas gracias por sus sugerencias que sirven para que mejoremos',
        'Gracias por su sugerencia',
        'Lo atenderemos en breve'
    ];
    return [
        //
        'sugerencia_id' => Sugerencia::all('id')->random(),
        'user_id' => User::all('id')->random(),
        'respuesta' => $respuestas[$this->faker->numberBetween(0, 3)],
    ];
});
