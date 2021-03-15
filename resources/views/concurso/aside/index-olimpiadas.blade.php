
<h3 id="olimpiadas" class="text-primary text-center">LISTADO OLIMPIADAS DE CONOCIMIENTO</h3>

<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            @if (Auth::user()->hasRole('admin'))
            <a href="{{route('concurso.create')}}" class="btn btn-primary me-md-2 create" type="button">Nuevo</a>&nbsp;
            @endif

            <!-- Button trigger modal -->

            {!! Form::open(['route'=>['concurso.index'], 'id' => 'frm-concursos']) !!}

                <div class="form-check form-check-inline">
                    {!! Form::radio('concursoEstado', 3, (($concursoEstado==3)? true : false)  , ['class' => 'form-check-input index']) !!}
                    {!! Form::label('concursoEstado-', 'Todos', ['class' => 'form-check-label']) !!}
                </div>

                <div class="form-check form-check-inline">
                    {!! Form::radio('concursoEstado', 1,   (($concursoEstado==1)? true : false) , ['class' => 'form-check-input index']) !!}
                    {!! Form::label('concursoEstado', 'Activos', ['class' => 'form-check-label']) !!}
                </div>

                <div class="form-check form-check-inline">
                    {!! Form::radio('concursoEstado', 2, (($concursoEstado==2)? true : false), ['class' => 'form-check-input index']) !!}
                    {!! Form::label('concursoEstado', 'Pendientes', ['class' => 'form-check-label']) !!}
                </div>

                <div class="form-check form-check-inline">
                    {!! Form::radio('concursoEstado', 0,  (($concursoEstado==0)? true : false), ['class' => 'form-check-input index']) !!}
                    {!! Form::label('concursoEstado', 'Anulados', ['class' => 'form-check-label']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-mdEnd">
            {{$temaconcursos->links()}}
        </div>
    </div>
</div>

<p class="text-success">{{ $temaconcursos->total() }} registros encontrados, pagina {{ $temaconcursos->currentPage() }} de {{ $temaconcursos->lastPage() }}</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">user id</th>
            <th scope="col">tema</th>
            <th scope="col">concurso</th>
            <th scope="col">estado</th>
            <th scope="col">fecha inicio</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($temaconcursos as $key => $temaconcurso)
            @php
                $color = "";
                $testado = "";
                switch($temaconcurso->estado){
                    case 0:
                        $color = "bg-danger";
                        $testado = "Anulado";
                        break;
                    case 1:
                        $color= "bg-success";
                        $testado = "Activo";
                        break;
                    case 2:
                        $color = "bg-warning";
                        $testado = "Pendiente";
                        break;
                }
            @endphp
            <tr>
                <th scope="row"> {{$key+1}}</th>
                <td>{{ $temaconcurso->id }}</td>
                <td>{{ $temaconcurso->concurso->user_id }}</td>
                <td>{{ $temaconcurso->tema->nombre }}</td>
                <td>{{ $temaconcurso->concurso->nombre }}</td>
                <td > <span class="text-white {{ $color }}">{{ $testado }}</span></td>
                <td>{{ $temaconcurso->created_at }}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal{{ $temaconcurso->id }}">
                        <i class="fas faEye"></i> Ver
                    </button>
                    <a class="btn btn-sm btn-success" href="{{ route('concurso.jugar', $temaconcurso->id) }}">Participar</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $temaconcurso->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                VER concurso ID: {{ $temaconcurso->id }}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                @include('concurso.aside.show')

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- {!! Form::open(['route'=>['concurso.update', $temaconcurso->id]], ['class' =>'d-inline']) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('id', $temaconcurso->id) !!}
                        {!! Form::submit('d', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}-->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



