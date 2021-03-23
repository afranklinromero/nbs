<?php

use App\Modelos\Configuracion;
use Illuminate\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(Configuracion::class, 1)->create();
        Configuracion::create([
            'nropreguntas' => '10',
            'limiterespuestaserroneas' => '10',
            'puntosporrespuesta' => '1',
            'tiempolimite' => '180',
        ]);
    }
}
