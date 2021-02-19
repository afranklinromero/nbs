<h3>
    Bandeja de Sugerencias NBS
</h3>
@include('sugerenciasnbs.aside.info')

<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <a href="{{route('sugerenciasnbs.create')}}" class="btn btn-primary me-md-2 create" type="button">Nuevo</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            {{$sugerenciasnbss->links()}}
        </div>
    </div>
</div>



<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">correo</th>
            <th scope="col">asunto</th>
            <th scope="col">Fecha</th>
            <th scope="col">Leido</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sugerenciasnbss as $key => $item)
            <tr>
                <th scope="row"> {{$key+1}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->sugject }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="{{route('sugerenciasnbs.show', $item->id)}}" class="btn btn-success show" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mensaje">Ver</a>
                    <a href="#" class="btn btn-danger delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">D</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



