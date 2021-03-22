<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DOCUMENTO TECNICO DE PROCEDIMIENTO PARA EL MANEJO DE CADAVERES DE CASOS DE COVID-19
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'JUSTIFICACION', 	'pagina'=>'1', 	'vistaprevia'=>'1.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'PASOS EN EL TRATAMIENTO DEL CADÁVER', 	'pagina'=>'2', 	'vistaprevia'=>'2.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'2', 	'nivel'=>'2', 	'nombre'=>'Traslado desde la sala o espacio de aislamiento', 	'pagina'=>'2', 	'vistaprevia'=>'2.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'2', 	'nivel'=>'2', 	'nombre'=>'Autopsia', 	'pagina'=>'3', 	'vistaprevia'=>'3.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'2.1', 	'nivel'=>'3', 	'nombre'=>'Equipo de protección individual para las autopsias', 	'pagina'=>'4', 	'vistaprevia'=>'4.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'2.2', 	'nivel'=>'3', 	'nombre'=>'Puesta del equipo de protección individual', 	'pagina'=>'5', 	'vistaprevia'=>'5.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'2.3', 	'nivel'=>'3', 	'nombre'=>'Retirada del equipo de protección individual', 	'pagina'=>'5', 	'vistaprevia'=>'5.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'2.4', 	'nivel'=>'3', 	'nombre'=>'Desplazamiento recomendado del equipo que emprende una autopsia en un establecimiento de atención sanitaria', 	'pagina'=>'5', 	'vistaprevia'=>'5.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'2.5', 	'nivel'=>'3', 	'nombre'=>'Limpieza en la sala de autopsias', 	'pagina'=>'6', 	'vistaprevia'=>'6.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'OTRAS ACCIONES SOBRE EL CADÁVER', 	'pagina'=>'6', 	'vistaprevia'=>'6.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'TRANSPORTE A LA FUNERARIA', 	'pagina'=>'6', 	'vistaprevia'=>'6.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'FERETRO Y DESTINO FINAL', 	'pagina'=>'7', 	'vistaprevia'=>'7.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'CASOS DESCARTADOS PARA COVID-19', 	'pagina'=>'7', 	'vistaprevia'=>'7.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'4', 	'tipomarcador_id'=>'1', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'CONSIDERACIONES RELATIVAS AL TRASLADO INTERNACIONAL DE CADÁVERES DE CASOS DE COVID-19', 	'pagina'=>'8', 	'vistaprevia'=>'8.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
    }
}
