<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id')->paginate();
        return view('users.index',compact('users'));
    }

    public function show($id){
        $users = User::find($id);
       
        return view('users.show', compact('users');
    }
    public function create(){
    
        $roles = Role::all();
        return view('users.create', compact('roles'));
    
        }

    public function edit($id){
        $users = user::find($id);
        return view('users.edit', compact('users'));
    
        }

public function update (UserRequest $request, $id){
        
            $users = User::find($id);
            $users->name = $request->name;
           
     
            return redirect()->route('users.index')
            ->with('info','El Producto fue actualizado');
}
public function destroy ($id){
    $users = User::find($id);
    $users->delete();
    return back ()->with('info', 'El Distribuidor fue eliminado');
     }



public function store (UserRequest $request){
    
        
    $role_user = Role::where('name', 'user')->first();
    $role_admin = Role::where('name', 'admin')->first();
   
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request['password']);
        $users->save();


        if( $request->rol == 1){
          
            $users->roles()->attach($role_admin);} 
       
       else{
            $users->roles()->attach($role_user);} 
        

        return redirect()->route('users.index')
                        ->with('info','El Usuario fue guardado');


   }

}



