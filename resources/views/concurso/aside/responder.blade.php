<div class="card mx-auto" >
    <div class="card-header bg-success">
        <h3 class="text-white"> <strong id="index"> {{$index}} </strong>.- {{$pregunta->pregunta}} </h3>
        {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body">
        @foreach ($pregunta->respuestas as $respuesta)
            @if ($respuesta->escorrecta == 1)
                <a href="{{ route('concurso.siguientepregunta', ['index' => $index, 'pregunta_id' => $respuesta->id]) }}" class="btn btn-success siguiente btn-lg btn-block"> {{$respuesta->respuesta}} </a> <br>
            @elseif($respuesta->id == $mirespuesta->id)
                <a href="{{ route('concurso.siguientepregunta', ['index' => $index, 'pregunta_id' => $respuesta->id]) }}" class="btn btn-danger siguiente btn-lg btn-block"> {{$respuesta->respuesta}} </a> <br>
            @else
                <a href="{{ route('concurso.siguientepregunta', ['index' => $index, 'pregunta_id' => $respuesta->id]) }}" class="btn btn-primary siguiente btn-lg btn-block"> {{$respuesta->respuesta}} </a> <br>
            @endif

        @endforeach
    </div>
</div>
