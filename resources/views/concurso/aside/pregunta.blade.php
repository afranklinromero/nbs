<div class="card mx-auto" >
    <div class="card-header">
        <h3 class="text-success"> <strong id="index"> {{$index}} </strong>.- {{$pregunta->pregunta}} </h3>
        {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body">
        @foreach ($pregunta->respuestas as $respuesta)
            <a href="{{ route('concurso.siguiente', ['index' => $index, 'respuesta_id' => $respuesta->id]) }}" class="btn btn-success btn-lg btn-block" id="{{ $respuesta->id }}"> {{$respuesta->respuesta}} </a> <br><br>
        @endforeach
    </div>
</div>
