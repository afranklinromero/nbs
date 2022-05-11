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
        Publicidad::create(['user_id'=>1, 'imagen'=>'1.png', 'titulo'=>'Asesoria tesis', 'contenido'=>'Asesoria de tesis y consultoria de salud', 'link'=>'https://bit.ly/3b53H2K', 'lugar'=>'libro', 'fechaini'=>'2021-01-01', 'fechafin'=>'2021-12-01']);
        for($i=2; $i<=6; $i++){
            factory(Publicidad::class, 1)->create(['imagen' => $i . '.png']);
        }
        
    }
}
