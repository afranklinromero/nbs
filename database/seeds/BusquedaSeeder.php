<?php

use App\Modelos\Busqueda;
use Illuminate\Database\Seeder;

class BusquedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Busqueda::create(['frase' => 'Malaria', 'frecuencia' => 50]);
        Busqueda::create(['frase' => 'Normas de salud', 'frecuencia' => 43]);
        Busqueda::create(['frase' => 'Tuberculosis', 'frecuencia' => 83]);
        //factory(Busqueda::class, 100)->create();

    }
}
