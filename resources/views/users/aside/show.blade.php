<h1>SHOW USUARIO</h1>
<table class="table table-striped">
    <tbody> 
        <tr><td class="text-right">ID:</td><td> {{$user->id}} </td></tr>
        <tr><td class="text-right">NOMBRE:</td><td> {{$user->name}} </td></tr>
        <tr><td class="text-right">CORREO:</td><td> {{$user->email}} </td></tr>
        <tr><td class="text-right">DIRECCION:</td><td> {{$user->direccion}} </td></tr>
        <tr><td class="text-right">TELEFONO:</td><td> {{$user->telefono}} </td></tr>
        <tr><td class="text-right">OCUPACION:</td><td> {{$user->ocupacion}} </td></tr>
    </tbody>
</table>
<a href="{{route('users.index')}}" class="btn btn-primary index">VOLVER</a>