<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador13Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //GUIA NACIONAL PARA EL MANEJO DE LA INFECCION POR EL VIRUS ZIKA
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'PRESENTACIÓN', 	'pagina'=>'5',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'RESOLUCION MINISTERIAL 0271 12 ABR 2016', 	'pagina'=>'6',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'INDICE', 	'pagina'=>'8',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'INTRODUCCIÓN', 	'pagina'=>'9',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'ANTECEDENTES', 	'pagina'=>'9',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'MECANISMOS DE TRANSMISIÓN', 	'pagina'=>'11',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'MANIFESTACIONES CLÍNICAS', 	'pagina'=>'13',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'DIAGNÓSTICO DIFERENCIAL', 	'pagina'=>'14',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'DIAGNÓSTICO LABORATORIAL', 	'pagina'=>'16',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'TRATAMIENTO', 	'pagina'=>'18',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'DEFINICIÓN DE CASO', 	'pagina'=>'20',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'MANEJO DE CASO', 	'pagina'=>'21',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'SITUACIÓN EPIDEMIOLÓGICA', 	'pagina'=>'22',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'RECOMENDACIONES PARA LA ORGANIZACIÓN DE ACTIVIDADES DE PREVENCIÓN Y CONTROL DE LA INFECCIÓN POR EL VIRUS ZIKA', 	'pagina'=>'24',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'ANEXOS', 	'pagina'=>'32',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'Ficha Epidemiológica para la vigilancia de Dengue - Chinkungunya - Zika', 	'pagina'=>'32',]);
        Marcador::create([	'libro_id'=>'13', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'Referencias Bibliográficas', 	'pagina'=>'33',]);

    }
}
