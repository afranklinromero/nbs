<?php

use App\Modelos\Publicidad;
use Illuminate\Database\Seeder;

class PublicidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Publicidad::create(['user_id'=>1, 'imagen'=>'imagen','ext'=>'png', 'titulo'=>'Asesoria tesis', 'contenido'=>'Asesoria de tesis y consultoria de salud', 'link'=>'https://bit.ly/3b53H2K', 'lugar'=>'libro', 'fechaini'=>'2021-01-01', 'fechafin'=>'2021-12-01']);
        //factory(Publicidad::class, 4)->create();
    }
}
