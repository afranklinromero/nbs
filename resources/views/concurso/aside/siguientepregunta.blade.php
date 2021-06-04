<div class="card mx-auto" >
    <div class="card-header bg-success">
        <h3 class="text-white"> <strong id="index"> {{$index}}</strong> de {{$temaconcurso->concurso->configuracion->nropreguntas}} .- {{$pregunta->pregunta}} </h3>
        {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body">
        <h3>Seleccione una respuesta</h3>
        <a id="siguientepregunta" href="{{route('concurso.siguientepregunta', ['index' => $index, 'temaconcurso_id'=> $temaconcurso->id, 'preguntaanterior_id' => $pregunta->id])}}"></a>
        @foreach ($respuestas as $respuesta)
            {!! Form::hidden('mirespuesta[]', $respuesta->id) !!}
            <p>
            <a
                href="{{ route('concurso.responder', ['mirespuesta_id' => $respuesta->id]) }}"
                class="btn btn-outline-primary responder btn-block btn-lg"
                style="white-space: normal"
                id="{{ $respuesta->id }}">
                    {{$respuesta->respuesta}}
                
            </a>
        </p>
            <br>
            
        @endforeach
        <p class="text-muted">Autor: <strong>{{ $pregunta->user->name }}</strong></p>
        <p class="text-center">
            <a class="btn btn-danger text-center" href="{{route('concurso.index')}}">Salir</a>
        </p>
    </div>
</div>
