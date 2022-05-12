<?php

use App\Modelos\Sugerencia;
use App\Modelos\Respuestasugerencia;
use Illuminate\Database\Seeder;

class SugerenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Sugerencia::class, 25)->create();
        factory(Respuestasugerencia::class, 50)->create();
    }
}
