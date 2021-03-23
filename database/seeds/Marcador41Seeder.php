<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador41Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marcador::create([	'libro_id'=>'41', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'I. GLOSARIO', 	'pagina'=>'13','esprimero' =>'1',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'I. ANTECEDENTES', 	'pagina'=>'15',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'II. OBJETIVO', 	'pagina'=>'19',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'III. CAMPO DE APLICACIÓN', 	'pagina'=>'19',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'IV. ETIOPATOGENIA DE LA LEISHMANIASIS', 	'pagina'=>'19',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'V. INMUNOPATOGENIA DE LA LEISHMANIASIS', 	'pagina'=>'24',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'VI. DIAGNÓSTICO', 	'pagina'=>'27',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'VII. TRATAMIENTO', 	'pagina'=>'43',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'8', 	'nivel'=>'1', 	'nombre'=>'VIII. VIGILANCIA EPIDEMIOLÓGICA DE LA LEISHMANIASIS', 	'pagina'=>'54',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'9', 	'nivel'=>'1', 	'nombre'=>'IX. VIGILANCIA ENTOMOLÓGICA DE LA LEISHMANIASIS', 	'pagina'=>'57',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'10', 	'nivel'=>'1', 	'nombre'=>'X. VIGILANCIA DE RESERVORIOS', 	'pagina'=>'60',]);
Marcador::create([	'libro_id'=>'41', 	'numero'=>'11', 	'nivel'=>'1', 	'nombre'=>'XI. MEDIDAS DE PREVENCION Y CONTROL DE LA LEISHMANIASIS EN EL MARCO DE LA POLÍTICA SAFCI Y LEY GENERAL DEL TRABAJO', 	'pagina'=>'61',]);

    }
}
