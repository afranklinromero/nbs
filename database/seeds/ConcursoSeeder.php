<?php

use App\Modelos\Concurso;
use Illuminate\Database\Seeder;

class ConcursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(Concurso::class, 5)->create();
        Concurso::create(['nombre'=>'1er Concurso Malaria', 'configuracion_id' => 1, 'fechaini' => now(), 'fechafin' => '2020-11-30']);
        Concurso::create(['nombre'=>'2do Concurso Malaria', 'configuracion_id' => 1, 'fechaini' => now(), 'fechafin' => '2020-11-30']);
        Concurso::create(['nombre'=>'3er Concurso Malaria', 'configuracion_id' => 1, 'fechaini' => now(), 'fechafin' => '2020-11-30']);
    }
}
