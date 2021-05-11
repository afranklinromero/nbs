<?php

use App\Modelos\Publicidad;
use Illuminate\Database\Seeder;

class PublicidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Publicidad::class, 10)->create();
    }
}
