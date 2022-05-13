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

        //Concurso::create(['nombre'=>'1er Concurso Malaria', 'picture' => 'concursomalaria.png', 'configuracion_id' => 1, 'fechaini' => '2021-01-01', 'fechafin' => '2021-01-30']);
        Concurso::create(['nombre'=>'1er Concurso Tuberculosis', 'picture' => 'tuberculosis.jpg', 'configuracion_id' => 1, 'fechaini' => '2022-05-01', 'fechafin' => '2022-05-30']);
        Concurso::create(['nombre'=>'2do Concurso Tuberculosis', 'picture' => 'tuberculosis.jpg', 'configuracion_id' => 1, 'fechaini' => '2022-05-01', 'fechafin' => '2022-05-30']);
        Concurso::create(['nombre'=>'3er Concurso Tuberculosis', 'picture' => 'tuberculosis.jpg', 'configuracion_id' => 1, 'fechaini' => '2022-05-01', 'fechafin' => '2022-05-30']);

        Temaconcurso::create(['tema_id'=> 2, 'concurso_id'=>1, 'fechaini' => '2022-05-01', 'fechafin' => '2022-05-30' ]);
        Temaconcurso::create(['tema_id'=> 2, 'concurso_id'=>2, 'fechaini' => '2022-04-01', 'fechafin' => '2022-04-30' ]);
        Temaconcurso::create(['tema_id'=> 2, 'concurso_id'=>3, 'fechaini' => '2025-05-15', 'fechafin' => '2022-05-30' ]);
        //Temaconcurso::create(['tema_id'=> 2, 'concurso_id'=>2,]);



        //factory(Concurso::class, 50)->create();
        //factory(Temaconcurso::class, 50)->create();

    }
}
