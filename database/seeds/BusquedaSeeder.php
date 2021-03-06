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
        Busqueda::create(['frase' => 'Malaria', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Normas en salud', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Tuberculosis', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Malaria', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Covid', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Dengue', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Zika', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Chagas', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Anticonceptivos', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Expediente', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Mujer embarazada', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'PAI', 'frecuencia' => 100]);
        Busqueda::create(['frase' => 'Acreditacion', 'frecuencia' => 100]);
        //factory(Busqueda::class, 100)->create();

    }
}
