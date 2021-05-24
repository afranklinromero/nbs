<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\Publicidad;
use App\User;
use Faker\Generator as Faker;

$factory->define(Publicidad::class, function (Faker $faker) {
    return [
        //
        'user_id' => User::all('id')->random(),
        'titulo' => $faker->text(32),
        'contenido' => $faker->text(1024),
        'fechaini' => now(),
        'fechafin' => now(),
        'lugar' => 'libro',
        'link' => $faker->url,
    ];
});
