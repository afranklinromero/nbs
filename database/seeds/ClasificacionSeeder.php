<?php

use App\Modelos\Clasificacion;
use Illuminate\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Clasificacion::class, 50)->create();
    }
}
