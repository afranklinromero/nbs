<?php

use Illuminate\Database\Seeder;
use App\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Libro::create([
            'titulo' => 'ENFERMEDADES QUIRURJICAS DEL SISTEMA DIGESTIVO',
            'tapa'=>'1.png',
            'documentopdf'=>'8 Libro NAC tomo 2.pdf',
            'edicion'=>'',
            'serie'=>'DOCUMENTOS TECNICO NORMATIVOS',
            'nropublicacion'=>'0',
            'lugarpublicacion'=>'',
        ]);

        Libro::create([
            'titulo' => 'NORMAS DE SALUD ORAL',
            'tapa'=>'2.png',
            'documentopdf'=>'DECRETO_REGLAMENTARIO_A_LA_LEY_3131.pdf',
            'edicion'=>'8 AGOSTO 2015',
            'serie'=>'DOCUMENTOS TECNICO NORMATIVOS',
            'nropublicacion'=>'0',
            'lugarpublicacion'=>'LA PAZ - BOLIVIA 2010',
        ]);

        Libro::create([
            'titulo' => 'DECRETO SUPREMO N° 28562',
            'tapa'=>'3.png',
            'documentopdf'=>'8 Libro NAC tomo 2.pdf',
            'edicion'=>'',
            'serie'=>'DOCUMENTOS TECNICO NORMATIVOS',
            'nropublicacion'=>'0',
            'lugarpublicacion'=>'',
        ]);

        Libro::create([
            'titulo' => 'DOCUMENTO TECNICO DE PROCEDIMIENTO PARA EL MANEJO DE CADAVERES DE CASOS DE COVID-19',
            'tapa'=>'4.png',
            'documentopdf'=>'Documento técnico de procedimiento para el manejo de cadáveres de casos de COVID19.pdf',
            'edicion'=>'',
            'serie'=>'DOCUMENTOS TECNICO NORMATIVOS',
            'nropublicacion'=>'0',
            'lugarpublicacion'=>'',
        ]);

        Libro::create([
            'titulo' => 'ESTATUTO DEL TRABAJADOR EN SALUD DS. Nº 28909',
            'tapa'=>'5.png',
            'documentopdf'=>'ESTATUTO DEL TRABAJADOR EN SALUD DS. Nº 28909.pdf',
            'edicion'=>'',
            'serie'=>'DOCUMENTOS TECNICO NORMATIVOS',
            'nropublicacion'=>'0',
            'lugarpublicacion'=>'',
        ]);
    }
}
