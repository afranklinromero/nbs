<div class="card mx-auto" >
    <div class="card-header bg-success">
        <h3 class="text-white"> <strong id="index"> {{$index}} </strong>.- {{$pregunta->pregunta}} </h3>
        {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body">
        @foreach ($pregunta->respuestas as $respuesta)
            <a href="{{ route('concurso.responder', ['index' => $index, 'pregunta_id' => $pregunta->id,'mirespuesta_id' => $respuesta->id]) }}" class="btn btn-outline-primary jugar btn-lg btn-block" id="{{ $respuesta->id }}"> 
                {{$respuesta->respuesta}} -> {{$respuesta->escorrecta}} 
            </a> 
            <br>
        @endforeach
    </div>
</div>
