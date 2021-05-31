<h3 class="text-success">Datos de usuario</h3>
<div class="row">
    <div class="col-md-6 text-center">
        <img class="img-fluid" width="300" src="{{asset('img/log-img.png')}}" alt="">
    </div>
    <div class="col-md-6">
        <table class="table table-sm">
            <tbody>
                <tr><td class="bg-light text-success text-right"><strong>Id:        </strong></td><td > {{$user->id}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>Nombre:    </strong></td><td> {{$user->name}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>Teléfono(Login):  </strong></td><td> {{$user->telefono}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>Correo:    </strong></td><td> {{$user->email}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>Dirección: </strong></td><td> {{$user->direccion}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>Ocupación: </strong></td><td> {{$user->ocupacion}} </td></tr>
            </tbody>
        </table>
        <div class="float-right">
            <a href="{{route('libro.index')}}" class="btn btn-sm btn-success index">volver</a>
            <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning index">editar</a>
        </div>
        
    </div>
    
</div>


