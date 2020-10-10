<?php

use Illuminate\Database\Seeder;
use App\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Autor::class, 50)->create();
    }
}
