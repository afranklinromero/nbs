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
        factory(Concurso::class, 5)->create();
    }
}
