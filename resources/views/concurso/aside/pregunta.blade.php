<div class="card mx-auto" >
    <div class="card-header">
        <h3 class="text-success"> <strong id="index"> {{$index}} </strong>.- {{$pregunta->pregunta}} </h3>
        <div id="pregunta_id">{{ $pregunta->id }}</div>

    </div>
    <div class="card-body">
        @foreach ($pregunta->respuestas as $respuesta)
            <a href="{{ route('concurso.siguiente', ['index' => $index, 'respuesta_id' => $respuesta->id]) }}" class="btn btn-success" id="{{ $respuesta->id }}"> {{$respuesta->respuesta}} </a> <br><br>
        @endforeach
        <a class="btn btn-primary" href="javascript:terminarjuego()">Terminar</a>
    </div>
</div>
