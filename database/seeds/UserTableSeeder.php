<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
       
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('user');
        $user->ocupacion = 'ING. INFORMATICO';
        $user->direccion = 'Calle S/N';
        $user->telefono = '0519700112233';
        $user->save();
        $user->roles()->attach($role_user);  

        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'sofcruz@gmail.com';
        $user->password = bcrypt('sofcruz');
        $user->ocupacion = 'ING. INFORMATICO';
        $user->direccion = 'Calle Sin nombre';
        $user->telefono = '0519700100000';
        $user->save();
        $user->roles()->attach($role_admin);//

        factory(User::class, 50)->create();

        
    }
}
