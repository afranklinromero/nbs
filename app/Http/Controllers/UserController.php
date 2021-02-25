<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function index(Request $request){
        $users = User::orderBy('id')->paginate(10);
        if ($request->ajax())
            return view('users.aside.lista',compact('users'))->render();
        return view('users.index',compact('users'));
    }

    public function show(Request $request, $id){
        $user = User::find($id);

        if ($request->ajax())
            return view('users.aside.show', compact('user'))->render();
        return view('users.show', compact('user'));
    }
    public function create(){
        //$roles = Role::all();
        return view('users.create');

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
    return back ()->with('info', 'El Usuario fue eliminado');
     }



public function store (Request $request){

        $role_user=2;
        $users = new User;
        $users->name = $request->nombre;
        $users->email = $request->correo;
        $users->telefono = $request->telefono;
        $users->ocupacion = $request->ocupacion;
        $users->direccion = $request->direccion;
        $users->password = bcrypt($request['password']);
        $users->save();

        $users->roles()->attach($role_user);
        
       
        return redirect()->route('login')
                        ->with('info','El Usuario fue guardado');


   }

}



