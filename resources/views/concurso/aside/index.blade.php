
@include('concurso.aside.info')
<hr>
<h3 class="text-primary text-center">LISTADO DE CONCURSOS</h3>
<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <a href="{{route('concurso.create')}}" class="btn btn-primary me-md-2 create" type="button">Nuevo</a>&nbsp;
            <!-- Button trigger modal -->

            {!! Form::open(['route'=>['concurso.index'], 'id' => 'frm-concursos']) !!}

                <div class="form-check form-check-inline">
                    {!! Form::radio('estado', 3, (($estado==3)? true : false)  , ['class' => 'form-check-input index']) !!}
                    {!! Form::label('estado', 'Todos', ['class' => 'form-check-label']) !!}
                </div>

                <div class="form-check form-check-inline">
                    {!! Form::radio('estado', 1,   (($estado==1)? true : false) , ['class' => 'form-check-input index']) !!}
                    {!! Form::label('estado', 'Activos', ['class' => 'form-check-label']) !!}
                </div>

                <div class="form-check form-check-inline">
                    {!! Form::radio('estado', 2, (($estado==2)? true : false), ['class' => 'form-check-input index']) !!}
                    {!! Form::label('estado', 'Pendientes', ['class' => 'form-check-label']) !!}
                </div>

                <div class="form-check form-check-inline">
                    {!! Form::radio('estado', 0,  (($estado==0)? true : false), ['class' => 'form-check-input index']) !!}
                    {!! Form::label('estado', 'Anulados', ['class' => 'form-check-label']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            {{$concursos->links()}}
        </div>
    </div>
</div>

<p class="text-success">{{ $concursos->total() }} registros encontrados, pagina {{ $concursos->currentPage() }} de {{ $concursos->lastPage() }}</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">user id</th>
            <th scope="col">tema</th>
            <th scope="col">concurso</th>
            <th scope="col">estado</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($concursos as $key => $concurso)
            @php
            $color = "";
            $testado = "";
                switch($concurso->estado){
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
                <td>{{ $concurso->id }}</td>
                <td>{{ $concurso->configuracion_id }}</td>
                <td>{{ $concurso->nombre }}</td>
                <td>{{ $concurso->descripcion }}</td>
                <td > <span class="text-white {{ $color }}">{{ $testado }}</span></td>
                <td>{{ $concurso->created_at }}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal{{ $concurso->id }}">
                        <i class="fas fa-eye"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $concurso->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                VER concurso ID: {{ $concurso->id }}
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
                    <!-- {!! Form::open(['route'=>['concurso.update', $concurso->id]], ['class' =>'d-inline']) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('id', $concurso->id) !!}
                        {!! Form::submit('d', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}-->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



