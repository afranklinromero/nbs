<?php

use App\Modelos\Autorlibro;
use Illuminate\Database\Seeder;

class AutorlibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Autorlibro::class, 50)->create();
    }
}
