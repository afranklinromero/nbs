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
            'sugerenciasnbs',
        ]);

        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(AutorlibroSeeder::class);
        $this->call(BusquedaSeeder::class);
        $this->call(TipomarcadorSeeder::class);
        $this->call(Marcador1Seeder::class);
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
        $this->call(Marcador16Seeder::class);
        $this->call(Marcador17Seeder::class);
        $this->call(Marcador18Seeder::class);
        $this->call(Marcador19Seeder::class);
        $this->call(Marcador20Seeder::class);
        $this->call(Marcador21Seeder::class);
        $this->call(Marcador22Seeder::class);
        $this->call(Marcador23Seeder::class);
        $this->call(Marcador24Seeder::class);
        $this->call(Marcador25Seeder::class);
        $this->call(Marcador26Seeder::class);
        $this->call(Marcador27Seeder::class);
        $this->call(Marcador28Seeder::class);
        $this->call(Marcador29Seeder::class);
        $this->call(Marcador30Seeder::class);
        $this->call(Marcador31Seeder::class);
        $this->call(Marcador32Seeder::class);
        $this->call(Marcador33Seeder::class);
        $this->call(Marcador34Seeder::class);
        $this->call(Marcador35Seeder::class);
        $this->call(Marcador36Seeder::class);
        $this->call(Marcador37Seeder::class);
        $this->call(Marcador38Seeder::class);
        $this->call(Marcador39Seeder::class);
        $this->call(Marcador40Seeder::class);
        $this->call(Marcador41Seeder::class);
        $this->call(Marcador42Seeder::class);
        $this->call(Marcador43Seeder::class);
        $this->call(Marcador44Seeder::class);
        $this->call(Marcador45Seeder::class);
        $this->call(Marcador46Seeder::class);
        $this->call(Marcador47Seeder::class);
        $this->call(Marcador48Seeder::class);
        $this->call(Marcador49Seeder::class);
        $this->call(Marcador50Seeder::class);
        $this->call(Marcador51Seeder::class);
        $this->call(Marcador52Seeder::class);

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
        $this->call(SugerenciasnbsSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::Statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::Statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
