<h3 id="preguntas" class="text-primary text-center">MIS PREGUNTAS</h3>
@include('concurso.aside.aside.pregunta')
@include('concurso.aside.info.pregunta')
<div class="card mb-3 shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-star">
                    <a href="{{route('pregunta.create')}}" class="btn btn-primary me-md-2 create" type="button">Nuevo</a>&nbsp;

                    <!-- Button trigger modal -->
                    <!--
                    {!! Form::open(['route'=>['pregunta.index'], 'id' => 'frm-preguntas']) !!}
                        <div class="form-check form-check-inline">
                            {!! Form::radio('preguntaEstado', 3, (($preguntaEstado==3)? true : false)  , ['class' => 'form-check-input index', 'id' => 'preguntaEstado']) !!}
                            {!! Form::label('preguntaEstado', 'Todos', ['class' => 'form-check-label']) !!}
                        </div>

                        <div class="form-check form-check-inline">
                            {!! Form::radio('preguntaEstado', 1,   (($preguntaEstado==1)? true : false) , ['class' => 'form-check-input index', 'id' => 'preguntaEstado']) !!}
                            {!! Form::label('preguntaEstado', 'Activos', ['class' => 'form-check-label']) !!}
                        </div>

                        <div class="form-check form-check-inline">
                            {!! Form::radio('preguntaEstado', 2, (($preguntaEstado==2)? true : false), ['class' => 'form-check-input index', 'id' => 'preguntaEstado']) !!}
                            {!! Form::label('preguntaEstado', 'Pendientes', ['class' => 'form-check-label']) !!}
                        </div>

                        <div class="form-check form-check-inline">
                            {!! Form::radio('preguntaEstado', 0,  (($preguntaEstado==0)? true : false), ['class' => 'form-check-input index', 'id' => 'preguntaEstado']) !!}
                            {!! Form::label('preguntaEstado', 'Anulados', ['class' => 'form-check-label']) !!}
                        </div>
                    {!! Form::close() !!}
                    -->
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 fs-6">
                <a href="{{route('pregunta.index')}}"></a>
                {{$preguntas->onEachSide(0)->links()}}
            </div>
        </div>

        <p class="text-success">{{ $preguntas->total() }} registros encontrados, pagina {{ $preguntas->currentPage() }} de {{ $preguntas->lastPage() }}</p>


    <table class="table table-striped">
        <thead>
            <tr>
                <!--<th scope="col">#</th>-->
                <!--<th scope="col" class="d-none d-md-table-cell">id</th>-->
                <!--<th scope="col" class="d-none d-md-table-cell">user id</th>-->
                <th scope="col" class="d-none d-md-table-cell">tema</th>
                <th scope="col">pregunta</th>
                <th scope="col" class="d-none d-md-table-cell">estado</th>
                <th scope="col" class="d-none d-md-table-cell">fecha</th>
                <th scope="col">opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($preguntas as $key => $pregunta)
                @php
                $color = "";
                $testado = "";
                    switch($pregunta->estado){
                        case 0:
                            $color = "danger";
                            $testado = "Anulado";
                            break;
                        case 1:
                            $color= "success";
                            $testado = "Activo";
                            break;
                        case 2:
                            $color = "warning";
                            $testado = "Pendiente";
                            break;
                    }
                @endphp
                <tr>
                    <!--<th scope="row"> {{$key+1}}</th>-->
                    <!--<td class="d-none d-md-table-cell">{{ $pregunta->id }}</td>-->
                    <!--<td class="d-none d-md-table-cell">{{ $pregunta->user->email }}</td>-->
                    <td class="d-none d-md-table-cell">{{ $pregunta->tema->nombre }}</td>
                    <td>
                        <a type="button" class="text-dark ver-pregunta" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $pregunta->id }}" href="#">
                            <span>{{ $pregunta->pregunta }}</span></td>
                        </a>
                    <td class="d-none d-md-table-cell"> <span class="badge badge-{{$color}} text-wrap}">{{ $testado }}</span></td>
                    <td class="d-none d-md-table-cell">{{ $pregunta->created_at->format('d/m/y') }}</td>
                    <td>
                        <!-- Button trigger modal -->
                            <!--<button type="button" class="btn btn-sm btn-primary ver-pregunta" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $pregunta->id }}">
                                Ver
                            </button>-->
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $pregunta->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        VER PREGUNTA ID: {{ $pregunta->id }}
                                    </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        @include('pregunta.aside.show')
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <a class="text-success fs-5" href="{{ route('pregunta.edit', $pregunta->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            &nbsp;
                            <a type="button" class="text-success fs-5" data-bs-toggle="modal" data-bs-target="#eliminarpreguntaModal{{ $pregunta->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar articulo">
                                <i class="far fa-trash-can"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="eliminarpreguntaModal{{ $pregunta->id }}" tabindex="-1" role="dialog" aria-labelledby="eliminarpreguntaModallLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="eliminarpreguntaModalLabel">Pregunta: {{ $pregunta->pregunta }}</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            Desea Eliminar la pregunta?
                                        </div>
                                        <div class="modal-footer">
                                            <form class="d-inline" method="POST" action="{{ route('pregunta.destroy', $pregunta->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-primary">Confirmar</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


