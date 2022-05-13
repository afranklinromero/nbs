<h3 id="preguntas" class="text-primary text-center">MIS PREGUNTAS</h3>

<div class="card mb-3 shadow">
    <div class="card-body">

    <div class="row">
        <div class="col-md-6">
            <div class="d-grid gap-2 d-md-flex justify-content-md-star">
                <a href="{{route('pregunta.create')}}" class="btn btn-primary me-md-2 create" type="button">Nuevo</a>&nbsp;
                <!-- Button trigger modal -->

                {!! Form::open(['route'=>['pregunta.index'], 'id' => 'frm-preguntas']) !!}

                    <div class="form-check form-check-inline">
                        {!! Form::radio('preguntaEstado', 3, (($preguntaEstado==3)? true : false)  , ['class' => 'form-check-input index']) !!}
                        {!! Form::label('preguntaEstado', 'Todos', ['class' => 'form-check-label']) !!}
                    </div>

                    <div class="form-check form-check-inline">
                        {!! Form::radio('preguntaEstado', 1,   (($preguntaEstado==1)? true : false) , ['class' => 'form-check-input index']) !!}
                        {!! Form::label('preguntaEstado', 'Activos', ['class' => 'form-check-label']) !!}
                    </div>

                    <div class="form-check form-check-inline">
                        {!! Form::radio('preguntaEstado', 2, (($preguntaEstado==2)? true : false), ['class' => 'form-check-input index']) !!}
                        {!! Form::label('preguntaEstado', 'Pendientes', ['class' => 'form-check-label']) !!}
                    </div>

                    <div class="form-check form-check-inline">
                        {!! Form::radio('preguntaEstado', 0,  (($preguntaEstado==0)? true : false), ['class' => 'form-check-input index']) !!}
                        {!! Form::label('preguntaEstado', 'Anulados', ['class' => 'form-check-label']) !!}
                    </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>

    <p class="text-success">{{ $preguntas->total() }} registros encontrados, pagina {{ $preguntas->currentPage() }} de {{ $preguntas->lastPage() }}</p>
    <div class="row">
        <div class="col-md-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                {{$preguntas->links()}}
            </div>
        </div>
    </div>

    <div class="table-responsive">


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">user id</th>
                <th scope="col">tema</th>
                <th scope="col">pregunta</th>
                <th scope="col">estado</th>
                <th scope="col">fecha</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($preguntas as $key => $pregunta)
                @php
                $color = "";
                $testado = "";
                    switch($pregunta->estado){
                        case 0:
                            $color = "badge bg-danger";
                            $testado = "Rechazado";
                            break;
                        case 1:
                            $color= "badge bg-success";
                            $testado = "Activo";
                            break;
                        case 2:
                            $color = "badge bg-warning";
                            $testado = "Pendiente";
                            break;
                    }
                @endphp
                <tr>
                    <th scope="row"> {{$key+1}}</th>
                    <td>{{ $pregunta->id }}</td>
                    <td>{{ $pregunta->user->email }}</td>
                    <td>{{ $pregunta->tema->nombre }}</td>
                    <td>{{ $pregunta->pregunta }}</td>
                    <td > <span class="text-white fs-6 {{ $color }} ">{{ $testado }}</span></td>
                    <td>{{ $pregunta->created_at->format('d/m/y') }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <a class="btn btn-sm btn-success m-1" href="{{ route('pregunta.show', $pregunta->id) }}">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('pregunta.edit', $pregunta->id) }}" class="btn btn-sm btn-success m-1">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a class="btn btn-sm btn-success m-1" data-bs-toggle="modal" data-bs-target="#deletePreguntaModal{{ $pregunta->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                        @include('pregunta.aside.delete-modal')

                        @include('pregunta.aside.show-modal')

                        <!-- {!! Form::open(['route'=>['pregunta.update', $pregunta->id]], ['class' =>'d-inline']) !!}
                            {!! Form::hidden('_method', 'PUT') !!}
                            {!! Form::hidden('id', $pregunta->id) !!}
                            {!! Form::submit('d', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}-->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>


