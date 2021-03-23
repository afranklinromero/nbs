<?php

use App\Modelos\Marcador;
use Illuminate\Database\Seeder;

class Marcador29Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ATENCION INTEGRADA AL CONTINUO DEL CURSO DE LA VIDA ADOLESCENTE - MUJER EN EDAD FERTIL - MUJER DURANTE EL EMBARAZO,
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Enfoque del continuo de atención en el curso de la vida', 	'pagina'=>'3','esprimero' =>'1',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Marco Legar que sustenta el enfoque del continuo de atencion', 	'pagina'=>'4',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Contenido', 	'pagina'=>'5',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'El continuo de la atención', 	'pagina'=>'7',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'1', 	'nivel'=>'1', 	'nombre'=>'Parte 1 - Atención integral a los adolescentes', 	'pagina'=>'8',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'1.1', 	'nivel'=>'2', 	'nombre'=>'Salud sexual y reproductiva', 	'pagina'=>'11',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'1.2', 	'nivel'=>'2', 	'nombre'=>'Riesgos sociales', 	'pagina'=>'15',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'2', 	'nivel'=>'2', 	'nombre'=>'Parte 2 - Mujer en edad fértil - Mujer durante el embarazo, parto y puerperio', 	'pagina'=>'28',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'2.1', 	'nivel'=>'2', 	'nombre'=>'Atención integral a la mujer', 	'pagina'=>'30',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'2.2', 	'nivel'=>'2', 	'nombre'=>'Embarazo y parto', 	'pagina'=>'40',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'2.3', 	'nivel'=>'2', 	'nombre'=>'Atención postnatal a la madre', 	'pagina'=>'76',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'3', 	'nivel'=>'3', 	'nombre'=>'Parte 3 - Atención al recién nacido y al menor de 2 mese de edad (AIEPI Neonatal)', 	'pagina'=>'84',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'3.1', 	'nivel'=>'2', 	'nombre'=>'Atención inmediata al recién nacido/a', 	'pagina'=>'85',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'3.2', 	'nivel'=>'2', 	'nombre'=>'Atención al menor de 7 días que es llevado al establecimiento de salud', 	'pagina'=>'96',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'3.3', 	'nivel'=>'2', 	'nombre'=>'Atención al niño/a de 7 días a menor de 2 meses de edad', 	'pagina'=>'105',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'4', 	'nivel'=>'4', 	'nombre'=>'Parte 4 - Atención al niño/a de 2 meses a menor de 5 años de edad (AIEPI-Nut Clínico)', 	'pagina'=>'117',]);
        Marcador::create([	'libro_id'=>'29', 	'numero'=>'4.1', 	'nivel'=>'2', 	'nombre'=>'Atención al niño o niña de 2 meses de edad a menor de 5 años', 	'pagina'=>'118',]);

    }
}
