
@include('pregunta.aside.info')

<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <a href="{{route('pregunta.create')}}" class="btn btn-primary me-md-2 create" type="button">Nuevo</a>
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
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($preguntas as $key => $item)
            <tr>
                <th scope="row"> {{$key+1}}</th>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tema->nombre }}</td>
                <td>{{ $item->pregunta }}</td>
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



