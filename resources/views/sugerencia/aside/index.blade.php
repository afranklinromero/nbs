<h3>
    Bandeja de Sugerencias
</h3>
@include('sugerencia.aside.info')
<div class="row">
       <div class="col-md-12">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            {{$sugerencias->links()}}
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
        @foreach ($sugerencias as $key => $sugerencia)
            <tr>
                <th scope="row"> {{$key+1}}</th>
                <td>
                    {!! Form::open(['route'=>['sugerencia.showme', $sugerencia->id]], ['class' =>'d-inline']) !!}
                        {!! Form::hidden('_method', 'PUT') !!}

                            @if ($sugerencia->estado==1)
                                <button class="btn btn-sm btn-success" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Leer sugerencia">
                                    <i class="fa-solid fa-envelope"></i>
                                </button>
                            @else
                                <button class="btn btn-sm btn-outline-success" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Leer sugerencia">
                                    <i class="fa-solid fa-envelope-open"></i>
                                </button>
                            @endif

                    {!! Form::close() !!}
                </td>
                <td>{{ $sugerencia->name }}</td>
                <td>{{ $sugerencia->email }}</td>
                <td>{{ $sugerencia->subject }}</td>
                <td>{{ $sugerencia->created_at->format('d/m/y h:m') }}</td>
                <td>
                    <a
                        href="#"
                        class="btn btn-sm btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteSugerenciaModal{{ $sugerencia->id }}"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Eliminar sugerencia"
                    >
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
              <!-- Modal -->
              @include('sugerencia.aside.delete-modal')

                </td>
            </tr>
        @endforeach
    </tbody>
</table>



