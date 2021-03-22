<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador16Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //GUIA PARA LA PREVENCION Y CONTROL DE LA TUBERCULOSIS DENTRO DE LOS ESTABLECIMIENTOS DE SALUD
        Marcador::create([	'libro_id'=>'16', 	'tipomarcador_id'=>'1', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'PORTADA', 	'pagina'=>'1', 	'vistaprevia'=>'7.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
    }
}
