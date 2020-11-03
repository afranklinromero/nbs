<?php

use App\Modelos\Tema;
use Illuminate\Database\Seeder;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(Tema::class, 10)->create();
        Tema::create(['nombre'=>'Malaria']);
    }
}
