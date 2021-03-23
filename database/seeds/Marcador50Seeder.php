<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador50Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marcador::create([	'libro_id'=>'50', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'ANTECEDENTES', 	'pagina'=>'10','esprimero' =>'1',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'DEFINICIONES', 	'pagina'=>'10',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'ALCANCE', 	'pagina'=>'11',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'OBJETIVOS', 	'pagina'=>'11',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'4.1', 	'nivel'=>'2', 	'nombre'=>'Objetivo General', 	'pagina'=>'11',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'4.2', 	'nivel'=>'2', 	'nombre'=>'Objetivos Específicos', 	'pagina'=>'12',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'RED DE LABORATORIOS AUTORIZADOS PARA DIAGNÓSTICO DEL COVID-19 (PCR/TR)', 	'pagina'=>'12',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'MÉTODOS DIAGNÓSTICO', 	'pagina'=>'13',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'6.1', 	'nivel'=>'2', 	'nombre'=>'Métodos moleculares', 	'pagina'=>'13',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'1', 	'nivel'=>'3', 	'nombre'=>'Reacciónde lacadenapolimerasa en tiempo real(PCR/TR)', 	'pagina'=>'13',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'2', 	'nivel'=>'3', 	'nombre'=>'Toma de Muestras RT-PCR', 	'pagina'=>'14',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'3', 	'nivel'=>'3', 	'nombre'=>'Pasos para toma de muestra', 	'pagina'=>'14',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'4', 	'nivel'=>'3', 	'nombre'=>'Procedimiento para toma de muestra', 	'pagina'=>'16',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'5', 	'nivel'=>'3', 	'nombre'=>'Conservación,embalajey transporte', 	'pagina'=>'17',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'6', 	'nivel'=>'3', 	'nombre'=>'Ventajas de la TécnicaPCR', 	'pagina'=>'18',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'7', 	'nivel'=>'3', 	'nombre'=>'Limitacionesde la Técnica PCR', 	'pagina'=>'19',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'6.2', 	'nivel'=>'2', 	'nombre'=>'Pruebas rápidas moleculares', 	'pagina'=>'20',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'1', 	'nivel'=>'3', 	'nombre'=>'Ventajas de la técnicaGeneXpert', 	'pagina'=>'20',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'2', 	'nivel'=>'3', 	'nombre'=>'Limitacionesde la técnica GeneXpert', 	'pagina'=>'21',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'6.3', 	'nivel'=>'2', 	'nombre'=>'Métodos Inmunológicos', 	'pagina'=>'22',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'6.4', 	'nivel'=>'2', 	'nombre'=>'Vigilancia serológica', 	'pagina'=>'27',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'6.5', 	'nivel'=>'2', 	'nombre'=>'Recomendaciones', 	'pagina'=>'28',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'Bibliografía', 	'pagina'=>'29',]);
Marcador::create([	'libro_id'=>'50', 	'numero'=>'8', 	'nivel'=>'1', 	'nombre'=>'Anexos', 	'pagina'=>'30',]);

    }
}
