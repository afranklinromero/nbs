<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador47Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marcador::create([	'libro_id'=>'47', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'INTRODUCCIÓN', 	'pagina'=>'11','esprimero' =>'1',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'1.1', 	'nivel'=>'2', 	'nombre'=>'Sistema Nacional de Salud de Bolivia', 	'pagina'=>'17',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'1.2', 	'nivel'=>'2', 	'nombre'=>'Marco legal', 	'pagina'=>'20',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'1.3', 	'nivel'=>'2', 	'nombre'=>'Antecedentes', 	'pagina'=>'25',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'1.4', 	'nivel'=>'2', 	'nombre'=>'Fundamentos generales', 	'pagina'=>'25',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'1.5', 	'nivel'=>'2', 	'nombre'=>'Marco conceptual', 	'pagina'=>'27',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'1.6', 	'nivel'=>'2', 	'nombre'=>'Sistema de MyE para el cumplimiento de sus objetivos del PNCT', 	'pagina'=>'29',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'1.7', 	'nivel'=>'2', 	'nombre'=>'Situacion actual del Sistema de Monitoreo y Evaluación para el Control de la Tuberculosis', 	'pagina'=>'37',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'PLAN DE MONITOREO Y EVALUACIÓN DEL PROGRAMA DE CONTROL DE LA TUBERCULOSIS', 	'pagina'=>'41',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'2.1', 	'nivel'=>'2', 	'nombre'=>'Objetivos', 	'pagina'=>'41',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'2.2', 	'nivel'=>'2', 	'nombre'=>'Estructura del plan del implementación Sistema de MyE del PNCT', 	'pagina'=>'42',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'1', 	'nivel'=>'3', 	'nombre'=>'Aspectos generales', 	'pagina'=>'42',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'2', 	'nivel'=>'3', 	'nombre'=>'Entradas (Inputs)', 	'pagina'=>'45',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'3', 	'nivel'=>'3', 	'nombre'=>'Procesos', 	'pagina'=>'62',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'4', 	'nivel'=>'3', 	'nombre'=>'Salidas (Outputs)', 	'pagina'=>'63',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'IMPLEMENTACIÓN DEL SISTEMA DE MyE DEL PNCT', 	'pagina'=>'66',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'FINANCIAMIENTO Y SOSTENIBILIDAD', 	'pagina'=>'68',]);
Marcador::create([	'libro_id'=>'47', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'ANEXOS', 	'pagina'=>'69',]);

    }
}
