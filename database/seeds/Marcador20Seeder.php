<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador20Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marcador::create([	'libro_id'=>'20', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Introducción', 	'pagina'=>'15',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Introducción', 	'pagina'=>'15',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Primera unidad: objetivos', 	'pagina'=>'19',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'Segunda unidad: conceptos y metodología', 	'pagina'=>'20',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'Tercera unidad: monitoreo', 	'pagina'=>'23',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'Cuarta unidad: evaluación', 	'pagina'=>'33',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'Quinta unidad: supervisión', 	'pagina'=>'40',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'Sexta unidad: indicadores seleccionados', 	'pagina'=>'42',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'Caja de herramientas', 	'pagina'=>'44',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'7.1', 	'nivel'=>'2', 	'nombre'=>'Medición de impacto', 	'pagina'=>'44',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'7.2', 	'nivel'=>'2', 	'nombre'=>'Seguimiento de indicadores', 	'pagina'=>'48',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'7.3', 	'nivel'=>'2', 	'nombre'=>'Revisiones del programa  y evaluaciones', 	'pagina'=>'49',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'7.4', 	'nivel'=>'2', 	'nombre'=>'Negociación', 	'pagina'=>'50',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'7.5', 	'nivel'=>'2', 	'nombre'=>'Dinámicas grupales', 	'pagina'=>'52',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'8', 	'nivel'=>'1', 	'nombre'=>'Anexos', 	'pagina'=>'55',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'8.1', 	'nivel'=>'2', 	'nombre'=>'Anexo I. Tabla de indicadores', 	'pagina'=>'55',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'8.2', 	'nivel'=>'2', 	'nombre'=>'Anexo II. Instrumentos de monitoreo, evaluación y supervisión', 	'pagina'=>'63',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'8.3', 	'nivel'=>'2', 	'nombre'=>'Anexo  III. Fichas técnicas de indicadores', 	'pagina'=>'95',]);
Marcador::create([	'libro_id'=>'20', 	'numero'=>'8.4', 	'nivel'=>'2', 	'nombre'=>'Anexo IV. Flujogramas de información', 	'pagina'=>'157',]);

    }
}
