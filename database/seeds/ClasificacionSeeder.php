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
/*
        $concursos = Concurso::all();
        foreach ($concursos as $key => $concurso) {
            $usuarios = User::all();
            foreach ($usuarios as $key => $usuario) {
                factory(Clasificacion::class, 1)->create(['user_id' => $usuario->id, 'concurso_id' => $concurso->id]);
            }
        }
        */
    }
}
