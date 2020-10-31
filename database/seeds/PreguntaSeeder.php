<?php

use App\Modelos\Pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Pregunta::class, 50)->create();
    }
}
