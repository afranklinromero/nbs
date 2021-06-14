<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Publicidad;
use App\User;
use Faker\Generator as Faker;

$factory->define(Publicidad::class, function (Faker $faker) {
    $lugar = ['libro', 'concurso', 'blog'];
    return [
        //
        'user_id' => User::all('id')->random(),
        'imagen' => $faker->text(5),
        'ext' => 'png',
        'titulo' => $faker->text(32),
        'contenido' => $faker->text(1024),
        'fechaini' => now(),
        'fechafin' => now(),
        'lugar' => $lugar[array_rand($lugar)],
        'link' => $faker->url,
    ];
});
