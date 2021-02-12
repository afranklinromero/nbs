<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador42Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marcador::create([	'libro_id'=>'42', 	'numero'=>'1', 	'nivel'=>'2', 	'nombre'=>'MARCO CONCEPTUAL', 	'pagina'=>'10',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'2', 	'nivel'=>'2', 	'nombre'=>'OBJETIVOS ESPECIFICOS', 	'pagina'=>'10',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'3', 	'nivel'=>'2', 	'nombre'=>'NORMATIVA LEGAL, OBLIGATORIEDAD Y CAMPO DE ACCION', 	'pagina'=>'11',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'CAPITULO I - CONTEXTO DE LA SALUD ORAL EN BOLIVIA', 	'pagina'=>'12',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'CAPITULO II - SERVICIOS DE SALUD ORAL', 	'pagina'=>'19',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'CAPITULO III - MODELO DE ATENCION ODONTOLOGICA EN EL SISTEMA NACIONAL DE SALUD', 	'pagina'=>'25',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'CAPITULO IV - EDUCACION, PROMOCION Y PREVENCION EN SERVICIOS DE ODONTOLOGIA', 	'pagina'=>'35',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'CAPITULO V - SISTEMA DE INFORMACION Y VIGILANCIA EPIDEMILOGICA (SNS-VE)', 	'pagina'=>'44',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'CAPITULO VI - PROTOCOLOS DE ATENCION ODONTOLOGICA', 	'pagina'=>'47',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'CAPITULO VII - INDICADORES EN SALUD ORAL', 	'pagina'=>'93',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'8', 	'nivel'=>'1', 	'nombre'=>'CAPITULO VIII - BIOSEGURIDAD', 	'pagina'=>'109',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'9', 	'nivel'=>'1', 	'nombre'=>'ANEXOS', 	'pagina'=>'115',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'10', 	'nivel'=>'1', 	'nombre'=>'GLOSARIO DE TERMINOS', 	'pagina'=>'132',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'11', 	'nivel'=>'1', 	'nombre'=>'BIBLIOGRAFIA', 	'pagina'=>'133',]);
Marcador::create([	'libro_id'=>'42', 	'numero'=>'12', 	'nivel'=>'1', 	'nombre'=>'ANEXO EDITORIAL', 	'pagina'=>'134',]);

    }
}
