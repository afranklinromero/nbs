<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador49Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marcador::create([	'libro_id'=>'49', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'PROTOCOLO BASICO DEL AISLAMIENTO DEL PACIENTE', 	'pagina'=>'1',]);
Marcador::create([	'libro_id'=>'49', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'CASOS SOPECHOSOS DE COVID-19', 	'pagina'=>'1',]);
Marcador::create([	'libro_id'=>'49', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'AISLAMIENTO DEL PACIENTE', 	'pagina'=>'1',]);
Marcador::create([	'libro_id'=>'49', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'TIPO DE ATENCION', 	'pagina'=>'2',]);
Marcador::create([	'libro_id'=>'49', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'DEFINICION DE CASO SOSPECHOSO DEL 27 DE FEBRERO DE 2020', 	'pagina'=>'3',]);
Marcador::create([	'libro_id'=>'49', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'REFERENCIAS', 	'pagina'=>'3',]);

    }
}
