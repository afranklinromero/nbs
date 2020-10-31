<?php

use App\Modelos\Nivel;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Nivel::class, 10)->create();
    }
}
