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
        Tema::create(['nombre'=>'Dengue']);
        Tema::create(['nombre'=>'Tuberculosis']);
        Tema::create(['nombre'=>'PAI']);
        Tema::create(['nombre'=>'Zoonosis']);
        Tema::create(['nombre'=>'Enfermedades transmitidas por vectores']);
        Tema::create(['nombre'=>'VIH']);
        Tema::create(['nombre'=>'Cancer Cervicouterino']);
    }
}
