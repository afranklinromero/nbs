<?php

use App\Modelos\Temaconcurso;
use Illuminate\Database\Seeder;

class TemaconcursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Temaconcurso::class, 10)->create();
    }
}
