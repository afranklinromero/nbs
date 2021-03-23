<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador8Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //GUIA DE MANEJO DE REACCIONES ADVERSAS A FARMACOS DE PRIMERA LINEA
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'INDICE', 	'pagina'=>'5','esprimero' =>'1',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'PRESENTACIÓN', 	'pagina'=>'7',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'-', 	'nivel'=>'1', 	'nombre'=>'CAPITULO I', 	'pagina'=>'11',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'INTRODUCCION', 	'pagina'=>'11',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'JUSTIFICACIÓN', 	'pagina'=>'12',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'2', 	'nivel'=>'2', 	'nombre'=>'OBJETIVO GENERAL DE LA GUÍA', 	'pagina'=>'12',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'2', 	'nivel'=>'2', 	'nombre'=>'OBJETIVO ESPECÍFICO DE LA GUÍA', 	'pagina'=>'12',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'SITUACIÓN ACTUAL DE LA TUBERCULOSIS EN BOLIVIA', 	'pagina'=>'13',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'SITUACIÓN ACTUAL DE LA REACCIONES ADVERSAS A FÁRMACOS ANTITUBERCULOSOS EN BOLIVIA', 	'pagina'=>'13',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'4', 	'nivel'=>'2', 	'nombre'=>'DEFINICIÓN DE REACCIÓN ADVERSA A FÁRMACOS ANTOTUBERCULOSOS', 	'pagina'=>'14',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'4', 	'nivel'=>'2', 	'nombre'=>'GRUPOS Y FACTORES DE RIESGO', 	'pagina'=>'14',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'4', 	'nivel'=>'2', 	'nombre'=>'MEDIDAS DE PREVENCIÓN', 	'pagina'=>'15',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'4', 	'nivel'=>'2', 	'nombre'=>'CLASIFICACIÓN', 	'pagina'=>'16',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'MANEJO', 	'pagina'=>'16',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'2', 	'nombre'=>'RAFA LEVE - ACTIVIDADES OBLIGATORIAS', 	'pagina'=>'17',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'2', 	'nombre'=>'RAFA LEVE - MENEJO EN EL NIVEL COMUNITARIO O FAMILIAR (DOTS c)', 	'pagina'=>'17',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'2', 	'nombre'=>'RAFA LEVE - MANEJO EN EL PRIMER NIVEL (PUESTOS Y CENTROS DE SALUD)', 	'pagina'=>'18',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'2', 	'nombre'=>'RAFA GRAVE', 	'pagina'=>'20',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'3', 	'nombre'=>'MANEJO EN EL NIVEL COMUNITARIO O FAMILIAR (DOTS-C)', 	'pagina'=>'20',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'3', 	'nombre'=>'MANEJO EN EL PRIMER NIVEL', 	'pagina'=>'21',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'3', 	'nombre'=>'MANEJO EN EL SEGUNDO Y TERCER NIVEL', 	'pagina'=>'23',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'3', 	'nombre'=>'CRITERIOS DE VALORACIÓN PARA INNGRESO A LA UTI', 	'pagina'=>'26',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'5', 	'nivel'=>'2', 	'nombre'=>'OTRAS REACCIONES ADVERSAS', 	'pagina'=>'26',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'FLUJOGRAMA DE LA TARJETA DE NOTIFICACIÓN DE RAFA (TARJETA AMARILLA)', 	'pagina'=>'27',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'CRITERIOS DE REINSTAURACIÓN DE LA MEDICACIÓN ANTITUBERCULOSA', 	'pagina'=>'27',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'7', 	'nivel'=>'2', 	'nombre'=>'EJEMPLO DE DESENSIBILIZACIÓN SEGUIMIENTO', 	'pagina'=>'29',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'7', 	'nivel'=>'2', 	'nombre'=>'SEGUIMIENTO', 	'pagina'=>'31',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'7', 	'nivel'=>'2', 	'nombre'=>'RECOMENDACIONES ESPECIALES', 	'pagina'=>'32',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'8', 	'nivel'=>'1', 	'nombre'=>'ANEXO', 	'pagina'=>'33',]);
        Marcador::create([	'libro_id'=>'8', 	'numero'=>'9', 	'nivel'=>'1', 	'nombre'=>'BIBILIOGRAFIA', 	'pagina'=>'49',]);

    }
}
