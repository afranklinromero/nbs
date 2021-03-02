<?php

use App\Modelos\Concurso;
use App\Modelos\Temaconcurso;
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
        Concurso::create(['nombre'=>'1er Concurso Malaria', 'picture' => 'concursomalaria.png', 'configuracion_id' => 1, 'fechaini' => now(), 'fechafin' => '2020-11-30']);
        Concurso::create(['nombre'=>'1er Concurso Tuberculosis', 'picture' => 'tuberculosis.jpg', 'configuracion_id' => 1, 'fechaini' => now(), 'fechafin' => '2020-12-30']);

        Temaconcurso::create(['tema_id'=> 1, 'concurso_id'=>1,]);
        Temaconcurso::create(['tema_id'=> 2, 'concurso_id'=>2,]);
    }
}
