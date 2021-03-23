<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador26Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LISTA NACIONAL DE MEDICAMENTOS ESENCIALES LINAME 2018-2020
        Marcador::create([	'libro_id'=>'26', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Lista de medicamentos esenciales LINAME 2018 - 2020 (Según orden alfabético)', 	'pagina'=>'23','esprimero' =>'1',]);
Marcador::create([	'libro_id'=>'26', 	'numero'=>'2', 	'nivel'=>'1', 	'nombre'=>'Lista de medicamentos esenciales LINAME 2018 - 2020 (Según clasificacion internacional) Anátomo - Terapéutico - Químico ATQ)', 	'pagina'=>'59',]);
Marcador::create([	'libro_id'=>'26', 	'numero'=>'3', 	'nivel'=>'1', 	'nombre'=>'Anexo 1 - Medicamentos incluídos 2018 - 2020', 	'pagina'=>'109',]);
Marcador::create([	'libro_id'=>'26', 	'numero'=>'4', 	'nivel'=>'1', 	'nombre'=>'Anexo 1 - Medicamentos excluídos 2018 - 2020', 	'pagina'=>'117',]);
Marcador::create([	'libro_id'=>'26', 	'numero'=>'5', 	'nivel'=>'1', 	'nombre'=>'Anexo 3 - Medicamentos de uso restringido', 	'pagina'=>'121',]);
Marcador::create([	'libro_id'=>'26', 	'numero'=>'6', 	'nivel'=>'1', 	'nombre'=>'Anexo editorial', 	'pagina'=>'127',]);

    }
}
