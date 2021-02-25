
@include('pregunta.aside.info')

<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <a href="{{route('pregunta.create')}}" class="btn btn-primary me-md-2 create" type="button">Nuevo</a>&nbsp;
            {!! Form::open() !!}
            <div class="form-check form-check-inline">
                {!! Form::radio('estado', 3, true, ['class' => 'form-check-input']) !!}
                {!! Form::label('estado', 'Todos', ['class' => 'form-check-label']) !!}
            </div>

            <div class="form-check form-check-inline">
                {!! Form::radio('estado', 1, false, ['class' => 'form-check-input']) !!}
                {!! Form::label('estado', 'Activos', ['class' => 'form-check-label']) !!}
            </div>

            <div class="form-check form-check-inline">
                {!! Form::radio('estado', 2, false, ['class' => 'form-check-input']) !!}
                {!! Form::label('estado', 'Pendientes', ['class' => 'form-check-label']) !!}
            </div>

            <div class="form-check form-check-inline">
                {!! Form::radio('estado', 0, false, ['class' => 'form-check-input']) !!}
                {!! Form::label('estado', 'Anulados', ['class' => 'form-check-label']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            {{$preguntas->links()}}
        </div>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">tema</th>
            <th scope="col">pregunta</th>
            <th scope="col">estado</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($preguntas as $key => $item)
            @php
            $color = "";
            $testado = "";
                switch($item->estado){
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
                <td>{{ $item->id }}</td>
                <td>{{ $item->tema->nombre }}</td>
                <td>{{ $item->pregunta }}</td>
                <td > <span class="text-white {{ $color }}">{{ $testado }}</span></td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="{{route('pregunta.show', $item->id)}}" class="btn btn-success show" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver mensaje">Ver</a>
                    {!! Form::open(['route'=>['pregunta.update', $item->id]], ['class' =>'d-inline']) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('id', $item->id) !!}
                        {!! Form::submit('d', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



