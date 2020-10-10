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
        $this->truncateTables([
            'users',
            'autors',
            'libros',
        ]);

        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::Statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::Statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
