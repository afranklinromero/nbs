<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\SugerenciasNBS;
use Faker\Generator as Faker;

$factory->define(SugerenciasNBS::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->email,
        'subject' => $faker->text(5),
        'content' => $faker->text(5),
    ];
});
