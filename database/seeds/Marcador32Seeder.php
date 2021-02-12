<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador32Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'CAPÍTULO I SITUACIÓN EPIDEMIOLÓGICA Y MAGNITUD DEL PROBLEMA', 	'pagina'=>'15',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'2', 	'nivel'=>'2', 	'nombre'=>'CAPÍTULO II DEFINICIONES ACTUALES', 	'pagina'=>'19',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'3', 	'nivel'=>'3', 	'nombre'=>'CAPÍTULO III ASPECTOS GENERALES DE LA TUBERCULOSIS', 	'pagina'=>'22',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'4', 	'nivel'=>'4', 	'nombre'=>'CAPÍTULO IV DIAGNÓSTICO DE LA TUBERCULOSIS', 	'pagina'=>'25',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'5', 	'nivel'=>'5', 	'nombre'=>'CAPÍTULO V TRATAMIENTO DE LA TUBERCULOSIS', 	'pagina'=>'31',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'6', 	'nivel'=>'6', 	'nombre'=>'CAPÍTULO VI TUBERCULOSIS INFANTIL', 	'pagina'=>'37',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'7', 	'nivel'=>'7', 	'nombre'=>'CAPÍTULO VII PREVENCIÓN EN TUBERCULOSIS Y PROMOCIÓN DE LA SALUD', 	'pagina'=>'43',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'8', 	'nivel'=>'8', 	'nombre'=>'CAPÍTULO VIII TUBERCULOSIS DROGORESISTENTE', 	'pagina'=>'47',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'9', 	'nivel'=>'9', 	'nombre'=>'CAPÍTULO IX REACCIONES ADVERSAS A FARMACOS ANTITUBERCULOSOS (RAFA)', 	'pagina'=>'57',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'10', 	'nivel'=>'10', 	'nombre'=>'CAPÍTULO X TUBERCULOSIS Y VIH', 	'pagina'=>'61',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'11', 	'nivel'=>'11', 	'nombre'=>'CAPÍTULO XI TUBERCULOSIS Y COMORBILIDAD', 	'pagina'=>'66',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'12', 	'nivel'=>'12', 	'nombre'=>'CAPÍTULO XII CONTROL DE INFECCIONES EN CONDICIONES DE PROGRAMA', 	'pagina'=>'71',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'13', 	'nivel'=>'13', 	'nombre'=>'CAPÍTULO XIII PROGRAMACIÓN Y SISTEMAS DE INFORMACIÓN', 	'pagina'=>'76',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'14', 	'nivel'=>'14', 	'nombre'=>'ANEXOS', 	'pagina'=>'87',]);
        Marcador::create([	'libro_id'=>'32', 	'numero'=>'15', 	'nivel'=>'15', 	'nombre'=>'BIBLIOGRAFÍA', 	'pagina'=>'104',]);

    }
}
