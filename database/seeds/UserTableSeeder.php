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
        $user->name = 'Administrador';
        $user->email = 'sofcruz@gmail.com';
        $user->password = bcrypt('sofcruz');
        $user->ocupacion = 'ING. INFORMATICO';
        $user->direccion = 'Calle Sin nombre';
        $user->telefono = '888888';
        $user->save();
        $user->roles()->attach($role_admin);//

        $user = new User();
        $user->name = 'Luis Alberto Jimenez';
        $user->email = 'luicobeto@gmail.com';
        $user->password = bcrypt('69231996');
        $user->ocupacion = 'Medico';
        $user->direccion = 'Calle Sin nombre';
        $user->telefono = '69231996';
        $user->save();
        $user->roles()->attach($role_admin);//

        $user = new User();
        $user->name = 'Invitado';
        $user->email = 'invitado@gmail.com';
        $user->password = bcrypt('invitado');
        $user->ocupacion = 'INVITADO';
        $user->direccion = 'Calle S/N';
        $user->telefono = '123456';
        $user->save();
        $user->roles()->attach($role_user);

        //factory(User::class, 10)->create();
    }
}
