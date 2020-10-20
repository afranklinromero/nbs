<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\Libro;
use App\Modelos\Marcador;
use App\Model;
use App\Modelos\Tipomarcador;
use Faker\Generator as Faker;

$factory->define(Marcador::class, function (Faker $faker) {
    $libros = Libro::where('id', '<>', '27');
    return [
        //
        'libro_id' => Libro::all('id')->random(),
        'padre_id' => Marcador::all('id')->random(),
        'tipomarcador_id' => Tipomarcador::all('id')->random(),
        'numero' => $faker->numberBetween(1, 10),
        'nivel' => $faker->numberBetween(1, 4),
        'espadre' => $faker->numberBetween(0, 1),
        'nombre' => $faker->name,
        'pagina' => $faker->numberBetween(1, 100),
        'vistaprevia' => $faker->text(125),
    ];
});
