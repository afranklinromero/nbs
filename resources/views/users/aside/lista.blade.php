<h3 class="rounded-sm p-3 mb-2  bg-success text-white">USUARIOS</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>OCUPACION</th>
            <th>ACCION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td> {{$user->name}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->ocupacion}} </td>
                <td>
                    <a href="{{route('users.show', $user->id)}}" class="btn btn-primary show">ver</a>
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning edit">editarrrr</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
{{$users->links()}}
