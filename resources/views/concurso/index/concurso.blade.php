
<h3 id="olimpiadas" class="text-primary text-center">LISTADO OLIMPIADAS DE CONOCIMIENTO</h3>
@include('concurso.aside.aside.concurso')
@include('concurso.aside.info.concurso')
<div class="card mb-3 shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-star">
                    @if (Auth::user()->hasRole('admin'))
                    <a href="{{route('concurso.create')}}" class="btn btn-primary me-md-2 create" type="button">Nuevo</a>&nbsp;


                    {!! Form::open(['route'=>['temaconcurso.index'], 'id' => 'frm-concursos', 'class' => 'row row-cols-lg-auto g-2 align-items-center']) !!}

                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 3, (($concursoEstado==3)? true : false)  , ['class' => 'form-check-input index', 'id'=> 'concursoEstado']) !!}
                                {!! Form::label('concursoEstado-', 'Todos', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 1,   (($concursoEstado==1)? true : false) , ['class' => 'form-check-input index', 'id'=> 'concursoEstado']) !!}
                                {!! Form::label('concursoEstado', 'Activos', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 2, (($concursoEstado==2)? true : false), ['class' => 'form-check-input index', 'id'=> 'concursoEstado']) !!}
                                {!! Form::label('concursoEstado', 'Pendientes', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 0,  (($concursoEstado==0)? true : false), ['class' => 'form-check-input index', 'id'=> 'concursoEstado']) !!}
                                {!! Form::label('concursoEstado', 'Anulados', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('pregunta.index')}}"></a>
                {{$temaconcursos->links()}}
            </div>
        </div>

        <p class="text-success">{{ $temaconcursos->total() }} registros encontrados, pagina {{ $temaconcursos->currentPage() }} de {{ $temaconcursos->lastPage() }}</p>
        <!--<div class="table-responsive">-->
        <div class="row">
            @foreach ($temaconcursos as $key => $temaconcurso)
                <div class="col-md-4">
                    <div class="card border-success mb-3 shadow">
                        <div class="card-header bg-success text-white">
                            <h5>{{$temaconcurso->concurso->nombre}}</h5>
                        </div>
                        <div class="card-body bg-white">
                            <p class="card-text">
                                <table class="table table-sm">
                                    @if (Auth::user()->hasRole('admin'))
                                    <tr><td class="text-right">id:</td> <td><strong>{{$temaconcurso->id}}</strong></td> </tr>
                                    <tr><td class="text-right">usuario:</td> <td><strong>{{$temaconcurso->concurso->usuario->email}}</strong></td> </tr>
                                    @endif
                                    <tr><td class="text-right">tema:</td> <td><strong>{{$temaconcurso->tema->nombre}}</strong></td> </tr>
                                    <tr><td class="text-right">concurso:</td> <td><strong>{{$temaconcurso->concurso->nombre}}</strong></td> </tr>
                                    <tr><td class="text-right">inicio:</td> <td><strong>{{$temaconcurso->concurso->fechaini->format('d/m/Y')}}</strong></td> </tr>
                                    <tr><td class="text-right">fin:</td> <td><strong>{{$temaconcurso->concurso->fechafin->format('d/m/Y')}}</strong></td> </tr>
                                    <tr>
                                        <td class="text-right">estado:</td>
                                        <td>
                                            <strong>
                                                @switch($temaconcurso->estado)
                                                    @case(0)
                                                        <p class="fs-6 badge badge-danger text-wrap">FINALIZADO</p>
                                                        @break
                                                    @case(1)
                                                    <p class="fs-6 badge badge-success text-wrap">ACTIVO</p>
                                                        @break
                                                    @case(2)
                                                        <p class="fs-6 badge badge-danger text-wrap">PROXIMAMENTE</p>
                                                        @break
                                                    @default

                                                @endswitch
                                            </strong>
                                        </td>
                                    </tr>
                                </table>
                            </p>
                            <div class="d-grid gap-2 mb-3">
                                <a class="block rounded-pill btn btn-success" href="{{route('concurso.jugar', $temaconcurso->id)}}">JUGAR</a>
                            </div>
                            <div>
                                @if (Auth::check() && Auth::user()->hasRole('admin'))
                                <div class="btn-group mx-auto" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $temaconcurso->id }}">ver</button>
                                    <a class="btn btn-primary" href="{{route('concurso.edit', $temaconcurso->concurso->id)}}">Editar</a>

                                </div>
                                @endif


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $temaconcurso->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> VER concurso ID: {{ $temaconcurso->id }}</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"> @include('concurso.aside.show') </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--</div>    -->
    </div>
</div>
