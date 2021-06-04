<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function __construct(Request $request){

    }
    public function index(Request $request){
        //Auth::user()->authorizeRoles(['admin']);

        $users = User::orderBy('id')->paginate(10);
        if ($request->ajax())
            return view('users.aside.lista',compact('users'))->render();
        return view('users.index',compact('users'));
        
    }

    public function show(Request $request, $id){
        //Auth::user()->authorizeRoles(['admin', 'user']);

        $user = User::find($id);

        //if ($request->ajax())
        //  return view('users.aside.show', compact('user'))->render();
        return view('users.show', compact('user'));
    }

    public function create(){
        //$roles = Role::all();
        return view('users.create');

    }

    public function edit($id){
        //Auth::user()->authorizeRoles(['admin', 'user']);
        
        $user = user::find($id);
        return view('users.edit', compact('user'));
        
    }

    public function update (UserRequest $request, $id){
        //Auth::user()->authorizeRoles(['admin', 'user']);
            $users = user::find($id);
            $users->name = $request->name;
            $users->email = $request->email;
            $users->telefono = $request->telefono;
            $users->ocupacion = $request->ocupacion;
            $users->direccion = $request->direccion;
            $users->password = bcrypt($request['password']);
            $users->save();

            //$users->roles()->attach($role_user);
        

            return redirect()->route('users.show', $users->id)
                            ->with('info','El Usuario fue guardado');
    }
    public function destroy ($id){
        //Auth::user()->authorizeRoles(['admin']);
            $users = User::find($id);
            $users->delete();
            return back ()->with('info', 'El Usuario fue eliminado');
        
    }



    public function store (UserRequest $request){
        
            $role_user=2;
            $users = new User;
            $users->name = $request->name;
            $users->email = $request->email;
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



