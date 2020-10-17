<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class MarcadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marcador::create([
            'libro_id' => 1,
            'padre_id' => 1,
            'tipomarcador_id' => 1,
            'numero' => 1,
            'nivel' => 1,
            'espadre' => 1,
            'nombre' => 'marcador inicial',
            'pagina' => 1,
            'vistaprevia' => 'imagen',
        ]);

        factory(Marcador::class, 500)->create();
    }
}
