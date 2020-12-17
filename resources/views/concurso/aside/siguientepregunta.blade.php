<div class="card mx-auto" >
    <div class="card-header bg-success">
        <h3 class="text-white"> <strong id="index"> {{$index}} </strong>.- {{$pregunta->pregunta}} </h3>
        {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body">
        <h3>Seleccione una respuesta</h3>
        <a id="siguientepregunta" href="{{route('concurso.siguientepregunta', ['index' => $index, 'preguntaanterior_id' => $pregunta->id])}}">xxx</a>
        @foreach ($respuestas as $respuesta)
            {!! Form::hidden('mirespuesta[]', $respuesta->id) !!}
            <a
                href="{{ route('concurso.responder', ['mirespuesta_id' => $respuesta->id]) }}" 
                class="btn btn-outline-primary responder btn-lg btn-block" 
                id="{{ $respuesta->id }}"> 
                    {{$respuesta->respuesta}} -> {{$respuesta->escorrecta}} 
            </a> 
            <br>
        @endforeach
    </div>
</div>
