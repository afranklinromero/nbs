<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador9Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //GUIA DE PROCEDIMIENTOS DE DESINFECCION PARA EL COVID 19
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'ANTECEDENTES', 	'pagina'=>'1', 	'vistaprevia'=>'1.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1','esprimero' =>'1',]);
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'OBJETIVO', 	'pagina'=>'2', 	'vistaprevia'=>'2.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'ALCANCE', 	'pagina'=>'2', 	'vistaprevia'=>'2.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'PROCEDIMIENTO DE LIMPIEZA Y DESINFECCION', 	'pagina'=>'3', 	'vistaprevia'=>'3.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'4.1', 	'nivel'=>'2', 	'nombre'=>'PARA APLICACIÓN EN ROPA Y MANOS', 	'pagina'=>'3', 	'vistaprevia'=>'3.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'4.2', 	'nivel'=>'2', 	'nombre'=>'PARA APLICACIÓN EN AMBIENTES, SUPERFICIES Y EXTERIORES', 	'pagina'=>'4', 	'vistaprevia'=>'4.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'NORMATIVAS Y OTROS DOCUMENTOS DE REFERENCIA', 	'pagina'=>'5', 	'vistaprevia'=>'5.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'REFERENCIAS BIBLIOGRÁFICAS', 	'pagina'=>'5', 	'vistaprevia'=>'5.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
        Marcador::create([	'libro_id'=>'9', 	'tipomarcador_id'=>'1', 	'numero'=>'7', 	'nivel'=>'1', 	'nombre'=>'ANEXOS', 	'pagina'=>'6', 	'vistaprevia'=>'6.PNG', 	'created_at'=>'2020-17-10', 	'updated_at'=>'2020-17-10', 	'estado'=>'1',]);
    }
}
