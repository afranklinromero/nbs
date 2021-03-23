<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador18Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //GUIA PARA LA VIGILANCIA CENTINELA DE LAS INFECCIONES RESPIRATURIAS AGUDAS GRAVES, IRAG PARTE 1
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Introducción', 	'pagina'=>'7','esprimero' =>'1',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'Vigilancia centinela de infección respiratoria aguda grave (IRAG)', 	'pagina'=>'11',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'2.1', 	'nivel'=>'2', 	'nombre'=>'Propósito de la vigilancia', 	'pagina'=>'11',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'2.2', 	'nivel'=>'2', 	'nombre'=>'Objetivo general', 	'pagina'=>'11',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'2.3', 	'nivel'=>'2', 	'nombre'=>'Objetiivo específico', 	'pagina'=>'12',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.4', 	'nivel'=>'2', 	'nombre'=>'Tipo de ambito de vigilancia', 	'pagina'=>'13',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.4', 	'nivel'=>'3', 	'nombre'=>'Criterios de selección de los hospitales', 	'pagina'=>'13',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'2', 	'nombre'=>'Organizaciòn del sistema de vigilancia centinela', 	'pagina'=>'14',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'2', 	'nombre'=>'Estructura', 	'pagina'=>'14',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'3', 	'nombre'=>'Funciones y responsabilidades', 	'pagina'=>'14',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'4', 	'nombre'=>'Responsabilidades locales (unidades centinelas)', 	'pagina'=>'14',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'4', 	'nombre'=>'Responsabilidades (epidemiólogo de cada hospital o responsable de vigilancia epidemiològica hospitalaria)', 	'pagina'=>'15',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'4', 	'nombre'=>'Responsabilidades de laboratorio en cada hospital', 	'pagina'=>'16',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'4', 	'nombre'=>'Responsabilidades (Responsable departamental de la vigilancia centinela de IRAG)', 	'pagina'=>'17',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'4', 	'nombre'=>'Responsable nacional de la vigilancia centinela de IRAG en el ministerio de salud', 	'pagina'=>'18',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'4', 	'nombre'=>'Responsabilidades de los laboratorios de referencia', 	'pagina'=>'19',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'3.5', 	'nivel'=>'4', 	'nombre'=>'Responsabilidades locales (unidades centinelas)', 	'pagina'=>'19',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'Laboratorio', 	'pagina'=>'21',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'4.1', 	'nivel'=>'2', 	'nombre'=>'Pruebas de diagnóstico para la influenza', 	'pagina'=>'21',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'4.2', 	'nivel'=>'2', 	'nombre'=>'Almacenamiento de las muestras', 	'pagina'=>'23',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'4.3', 	'nivel'=>'2', 	'nombre'=>'Transporte de las muestras', 	'pagina'=>'24',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'4.4', 	'nivel'=>'2', 	'nombre'=>'Selecciòn de muestras', 	'pagina'=>'24',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'4.5', 	'nivel'=>'2', 	'nombre'=>'Sincronizaciòn de envíos de muestras', 	'pagina'=>'25',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'4.6', 	'nivel'=>'2', 	'nombre'=>'Envío de muestras a centros colaboradores (CC) de las OMS', 	'pagina'=>'25',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'Estrategia de vigilancia', 	'pagina'=>'26',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'5.1', 	'nivel'=>'2', 	'nombre'=>'Definición de caso de IRAG', 	'pagina'=>'26',]);
        Marcador::create([	'libro_id'=>'18', 	'numero'=>'5.2', 	'nivel'=>'2', 	'nombre'=>'Criterios de inclusión y exclusion de IRAG en hospitalizados', 	'pagina'=>'26',]);

    }
}
