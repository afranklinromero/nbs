<h3>{{$pregunta->subject}}</h3>
<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <p class="me-md-2"><strong>{{$pregunta->pregunta}}</strong> <span class="text-muted"> [] </span> </p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <p class="text-muted">{{ $pregunta->created_at }}</p>
        </div>
    </div>
</div>

<div class="row">
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
                @foreach ($pregunta->respuestas as $key => $item)
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
</div>

<div class="row">
    <div class="col">
        <a href="{{ route('pregunta.index') }}" class="btn btn-success index">Volver</a>
    </div>
</div>

