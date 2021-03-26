
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
                    @endif

                    {!! Form::open(['route'=>['concurso.index'], 'id' => 'frm-concursos', 'class' => 'row row-cols-lg-auto g-2 align-items-center']) !!}
                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 3, (($concursoEstado==3)? true : false)  , ['class' => 'form-check-input index']) !!}
                                {!! Form::label('concursoEstado-', 'Todos', ['class' => 'form-check-label']) !!}    
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 1,   (($concursoEstado==1)? true : false) , ['class' => 'form-check-input index']) !!}
                                {!! Form::label('concursoEstado', 'Activos', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 2, (($concursoEstado==2)? true : false), ['class' => 'form-check-input index']) !!}
                                {!! Form::label('concursoEstado', 'Pendientes', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 0,  (($concursoEstado==0)? true : false), ['class' => 'form-check-input index']) !!}
                                {!! Form::label('concursoEstado', 'Anulados', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="form-check">
                                {!! Form::radio('concursoEstado', 0,  (($concursoEstado==0)? true : false), ['class' => 'form-check-input index']) !!}
                                {!! Form::label('concursoEstado', 'Anulados', ['class' => 'form-check-label']) !!}
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="form-select">
                                {!! Form::select('tema_id', ['Uno', 'Dos', 'Tres'], null, ['class'=> "form-control"]) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
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
                    <th scope="col">fecha fin</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($temaconcursos as $key => $temaconcurso)
                    @php
                        $enfecha = ($temaconcurso->concurso->fechaini < now() && now() < $temaconcurso->concurso->fechafin)?1:0;
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
                        <td>{{ $temaconcurso->concurso->fechaini->format('d/m/Y') }}</td>
                        <td>{{ $temaconcurso->concurso->fechafin->format('d/m/Y') }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal{{ $temaconcurso->id }}">
                                <i class="fas faEye"></i> Ver
                            </button>
                            <a class="btn btn-sm btn-success {{ ($enfecha==1)? "": "disabled" }}" href="{{ route('concurso.jugar', $temaconcurso->id) }}">Participar</a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $temaconcurso->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
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
    </div>
</div>


