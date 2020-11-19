<div class="card mx-auto" >
    <div class="card-header bg-success">
        <h3 class="text-white"> <strong id="index"> {{$index}} </strong>.- {{$pregunta->pregunta}} </h3>
        {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body">
        <h3>Seleccione una respuesta</h3>
        
        @foreach ($respuestas as $respuesta)
            {!! Form::hidden('mirespuesta[]', $respuesta->id) !!}
            <a
                href="{{ route('concurso.evaluar', ['mirespuesta_id' => $respuesta->id]) }}" 
                class="btn btn-outline-primary evaluar btn-lg btn-block" 
                id="{{ $respuesta->id }}"> 
                    {{$respuesta->respuesta}} -> {{$respuesta->escorrecta}} 
            </a> 
            <br>
        @endforeach
    </div>
</div>
