<?php

use App\Tipomarcador;
use Illuminate\Database\Seeder;

class TipomarcadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tipomarcador::create(['nombre' => 'TITULO',]);
        Tipomarcador::create(['nombre' => 'IMAGEN',]);
        Tipomarcador::create(['nombre' => 'GRAFICO',]);
        Tipomarcador::create(['nombre' => 'DIAGRAMA',]);
        Tipomarcador::create(['nombre' => 'LEY',]);
        //factory(Tipomarcador::class, 10)->create();
    }
}
