<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // La creación de datos de roles debe ejecutarse primero

        $this->truncateTables([
            'users',
            'roles',
            'role_user',
            'autor',
            'libro',
            'autorlibro',
            'busqueda',
            'tipomarcador',
            'marcador',
            'tema',
            'pregunta',
            'respuesta',
            'nivel',
            'nivelusuario',
            'configuracion',
            'concurso',
            'temaconcurso',
            'inscripcion',
            'participacion',
            'detalleparticipacion',
            'clasificacion',
        ]);

        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(AutorlibroSeeder::class);
        $this->call(BusquedaSeeder::class);
        $this->call(TipomarcadorSeeder::class);
        $this->call(MarcadorSeeder::class);
        $this->call(Marcador2Seeder::class);
        $this->call(Marcador2Seeder::class);
        $this->call(Marcador3Seeder::class);
        $this->call(Marcador4Seeder::class);
        $this->call(Marcador5Seeder::class);
        $this->call(Marcador6Seeder::class);
        $this->call(Marcador7Seeder::class);
        $this->call(Marcador8Seeder::class);
        $this->call(Marcador9Seeder::class);
        $this->call(Marcador10Seeder::class);
        $this->call(Marcador11Seeder::class);
        $this->call(Marcador12Seeder::class);
        $this->call(Marcador13Seeder::class);
        $this->call(Marcador14Seeder::class);
        $this->call(Marcador15Seeder::class);
        $this->call(Marcador2Seeder::class);
        $this->call(Marcador25Seeder::class);
        $this->call(Marcador27Seeder::class);

        $this->call(TemaSeeder::class);
        $this->call(PreguntaSeeder::class);
        $this->call(RespuestaSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(NivelusuarioSeeder::class);
        $this->call(ConfiguracionSeeder::class);
        $this->call(ConcursoSeeder::class);
        $this->call(TemaconcursoSeeder::class);
        $this->call(InscripcionSeeder::class);
        $this->call(ParticipacionSeeder::class);
        $this->call(DetalleparticipacionSeeder::class);
        $this->call(ClasificacionSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::Statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::Statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
