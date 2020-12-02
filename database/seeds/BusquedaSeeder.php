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
        factory(Busqueda::class, 100)->create();
    }
}
