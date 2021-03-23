<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador17Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //GUIA PARA LA VIGILANCIA CENTINELA DE LAS INFECCIONES RESPIRATURIAS AGUDAS GRAVES, IRAG PARTE 2

        Marcador::create([	'libro_id'=>'17', 	'numero'=>'5.3', 	'nivel'=>'2', 	'nombre'=>'Identificación del agente causal', 	'pagina'=>'27','esprimero' =>'1',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'5.4', 	'nivel'=>'2', 	'nombre'=>'Población objetivo de la vigilancia', 	'pagina'=>'27',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'5.5', 	'nivel'=>'2', 	'nombre'=>'Determinación del número de muestras para laboratorio', 	'pagina'=>'27',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'5.6', 	'nivel'=>'2', 	'nombre'=>'Duración y periodicidad de la vigilancia', 	'pagina'=>'27',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'5.7', 	'nivel'=>'2', 	'nombre'=>'Proceso de recolección de datos', 	'pagina'=>'27',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'5.7', 	'nivel'=>'3', 	'nombre'=>'Pasos para la recolección de datos', 	'pagina'=>'29',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'5.8', 	'nivel'=>'2', 	'nombre'=>'Pasos para toma de muestra', 	'pagina'=>'29',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'Producción y difusión de la información', 	'pagina'=>'31',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'Supervisión de la vigilancia centinela de IRAG', 	'pagina'=>'34',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'8', 	'nivel'=>'1', 	'nombre'=>'Indicadores', 	'pagina'=>'34',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'8.1', 	'nivel'=>'2', 	'nombre'=>'Indicadores operativos de desempeño de los establecimientos de salud dentro del sistema de vigilancia', 	'pagina'=>'36',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'9', 	'nivel'=>'1', 	'nombre'=>'Referencias Bibliográficas', 	'pagina'=>'40',]);
        Marcador::create([	'libro_id'=>'17', 	'numero'=>'10', 	'nivel'=>'1', 	'nombre'=>'Anexos', 	'pagina'=>'44',]);

    }
}
