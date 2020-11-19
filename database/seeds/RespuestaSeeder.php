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
        for ($i=1; $i <= 50 ; $i++) { 
            # code...
            factory(Respuesta::class, 1)->create(['pregunta_id' => $i, 'escorrecta' => 1]);
            factory(Respuesta::class, 3)->create(['pregunta_id' => $i, 'escorrecta' => 0]);
        }
    }
}
