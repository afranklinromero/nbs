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
        $user->save();
        $user->roles()->attach($role_user);  

        $user = new User();
        $user->name = 'sofcruz';
        $user->email = 'sofcruz@gmail.com';
        $user->password = bcrypt('sofcruz');
        $user->save();
        $user->roles()->attach($role_admin);//

        
    }
}
