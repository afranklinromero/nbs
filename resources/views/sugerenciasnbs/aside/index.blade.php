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



<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">&nbsp;</th>
            <th scope="col">nombre</th>
            <th scope="col">correo</th>
            <th scope="col">asunto</th>
            <th scope="col">Fecha</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sugerenciasnbss as $key => $item)
            <tr>
                <th scope="row"> {{$key+1}}</th>
                <td>
                    {!! Form::open(['route'=>['sugerenciasnbs.showme', $item->id]], ['class' =>'d-inline']) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        
                            @if ($item->estado==1) 
                                <button class="btn btn-sm btn-dark" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Leer sugerencia">
                                    <i class="far fa-envelope"></i> 
                                </button>
                            @else
                                <button class="btn btn-sm btn-outline-secondary" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Leer sugerencia">
                                    <i class="far fa-envelope-open"></i> 
                                </button>
                            @endif
                        
                    {!! Form::close() !!}
                </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->created_at->format('d/m/y h:m') }}</td>
                <td>
                    {!! Form::open(['route'=>['sugerenciasnbs.update', $item->id]], ['class' =>'d-inline']) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('id', $item->id) !!}

                        <button class="btn btn-sm btn-danger" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar articulo"><i class="far fa-trash-alt"></i></button>
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
    </tbody>
</table>



