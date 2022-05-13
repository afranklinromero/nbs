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
            'libro',
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
            'participacion',
            'detalleparticipacion',
            'clasificacion',
            'sugerencia',
            'blog',
            'publicidad'
        ]);

        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        //$this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        //$this->call(AutorlibroSeeder::class);
        $this->call(BusquedaSeeder::class);
        $this->call(TipomarcadorSeeder::class);
        $this->call(TemaSeeder::class);
        $this->call(PreguntaSeeder::class);
        $this->call(RespuestaSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(NivelusuarioSeeder::class);
        $this->call(ConfiguracionSeeder::class);
        $this->call(ConcursoSeeder::class);
        $this->call(TemaconcursoSeeder::class);
        $this->call(ParticipacionSeeder::class);
        $this->call(DetalleparticipacionSeeder::class);
        $this->call(ClasificacionSeeder::class);
        $this->call(SugerenciaSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(PublicidadSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::Statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::Statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
