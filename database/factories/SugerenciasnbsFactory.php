<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Modelos\SugerenciasNBS;
use Faker\Generator as Faker;

$factory->define(SugerenciasNBS::class, function (Faker $faker) {
    return [
        //
        //'user_id' => User::all('id')->random(),
        'name' => $faker->name,
        'email' => $faker->email,
        'subject' => $faker->text(5),
        'content' => $faker->text(5),
    ];
});
