<h3 class="rounded-sm p-3 mb-2  bg-success text-white">SHOW USUARIO</h3>
<div class="row">
    <div class="col-md-6">
        <table class="table">
            <tbody>
                <tr><td class="bg-light text-success text-right"><strong>ID:        </strong></td><td class="border border-success"> {{$user->id}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>NOMBRE:    </strong></td><td class="border border-success"> {{$user->name}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>CORREO:    </strong></td><td class="border border-success"> {{$user->email}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>DIRECCION: </strong></td><td class="border border-success"> {{$user->direccion}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>TELEFONO:  </strong></td><td class="border border-success"> {{$user->telefono}} </td></tr>
                <tr><td class="bg-light text-success text-right"><strong>OCUPACION: </strong></td><td class="border border-success"> {{$user->ocupacion}} </td></tr>
            </tbody>
        </table>
    </div>
</div>

<a href="{{route('users.index')}}" class="btn btn-primary index">VOLVER</a>
