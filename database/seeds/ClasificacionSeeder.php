<?php

use App\Modelos\Clasificacion;
use App\Modelos\Concurso;
use App\User;
use Illuminate\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(Clasificacion::class, 50)->create();

        //factory(Clasificacion::class, 1)->create(['user_id' => 2, 'concurso_id' =>'1', 'puntos' => 400]);
        /*
        $concursos = Concurso::all();
        foreach ($concursos as $key => $concurso) {
            $usuarios = User::all();
            foreach ($usuarios as $key => $usuario) {
                factory(Clasificacion::class, 1)->create(['user_id' => $usuario->id, 'concurso_id' => $concurso->id]);
            }
        }*/
        /*$usuarios = User::all();
        foreach ($usuarios as $key => $user) {
            factory(Clasificacion::class, 1)->create(['user_id' => $user->id, 'concurso_id' =>'1']);
        }*/

    }
}
