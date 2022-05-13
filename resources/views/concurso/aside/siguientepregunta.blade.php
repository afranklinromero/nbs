<div class="card mx-auto" >
    <div class="card-header bg-primary bg-opacity-50 text-white">
        <h3 class="text-center">
            <span> <span id="index">{{$index}}</span> de {{ $temaconcurso->concurso->configuracion->nropreguntas }} </span><br>
            <span> {{$pregunta->pregunta}} </span>
            </h3>
            {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body" style="background-image: url('{{ asset('img/fonco-concurso3.png') }}');">
        <div>
            <h3>Seleccione una respuesta</h3>
            <a id="siguientepregunta" href="{{route('concurso.siguientepregunta', ['index' => $index, 'temaconcurso_id'=> $temaconcurso->id, 'preguntaanterior_id' => $pregunta->id])}}"></a>
            @foreach ($respuestas as $respuesta)
                {!! Form::hidden('mirespuesta[]', $respuesta->id) !!}
                <p>
                <a
                    href="{{ route('concurso.responder', ['mirespuesta_id' => $respuesta->id]) }}"
                    class="btn btn-primary responder btn-block btn-lg"
                    style="white-space: normal"
                    id="{{ $respuesta->id }}">
                        {{$respuesta->respuesta}}

                </a>
            </p>
                <br>

            @endforeach
            <p class="text-muted">Autor: <strong>{{ $pregunta->user->name }}</strong></p>
            <p class="text-center">
                <a class="btn btn-danger rounded-pill text-center fs-5" href="{{route('concurso.index')}}">Salir</a>
            </p>
        </div>
    </div>
</div>
