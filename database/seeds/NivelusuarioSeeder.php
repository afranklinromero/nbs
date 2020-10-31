<?php

use App\Modelos\Nivelusuario;
use Illuminate\Database\Seeder;

class NivelusuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Nivelusuario::class, 50)->create();
    }
}
