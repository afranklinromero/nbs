<?php

use App\Modelos\Respuesta;
use Illuminate\Database\Seeder;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Respuesta::class, 200)->create();
    }
}
