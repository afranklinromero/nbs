<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador37Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MANUAL TECNICO PROGRAMA AMPLIADO INMUNAZIÓN FAMILIAR Y COMUNITARIA
        Marcador::create([	'libro_id'=>'37', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'MÓDULO I. Promoción de la Salud', 	'pagina'=>'11','esprimero' =>'1',]);
        Marcador::create([	'libro_id'=>'37', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'MÓDULO II. Conociendo el PAI', 	'pagina'=>'35',]);
        Marcador::create([	'libro_id'=>'37', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'MÓDULO III. La Organización y Planificación del PAI', 	'pagina'=>'51',]);
        Marcador::create([	'libro_id'=>'37', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'MÓDULO IV. Vacunación', 	'pagina'=>'69',]);
        Marcador::create([	'libro_id'=>'37', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'MÓDULO V. Vigilancia Epidemiológica', 	'pagina'=>'141',]);
        Marcador::create([	'libro_id'=>'37', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'MODULO VI. cadena de frío', 	'pagina'=>'177',]);
        Marcador::create([	'libro_id'=>'37', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'MÓDULO VII. Logística', 	'pagina'=>'199',]);
        Marcador::create([	'libro_id'=>'37', 	'numero'=>'8', 	'nivel'=>'1', 	'nombre'=>'MÓDULO VIII. Capacitación, supervisión, monitoreo y evaluación', 	'pagina'=>'234',]);

    }
}
