<div class="card mx-auto" >
    <div class="card-header alert-success">
        <p class="h3 text-center"><strong id="index"> {{$index}} / {{$temaconcurso->concurso->configuracion->nropreguntas}} </strong></p>
        <h3 class="text-center text-dark"> {{$pregunta->pregunta}} </h3>
        {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body">
        <p class="h3 text-center p-3">Seleccione una respuesta</p>
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
        <p class="text-success">
            <a class="h3 text-success float-left" href="#"><i class="fa-regular fa-thumbs-up"></i></a>&nbsp;&nbsp;
            <a class="h3 text-danger float-right" href="#"><i class="fa-regular fa-thumbs-down"></i></a>
        </p>
        <br>
        <p class="text-center">
            <a class="btn btn-success text-center" href="{{route('concurso.index')}}">Continuar</a>
        </p>
        <p class="text-danger">
            <a class="btn btn-link text-center" href="{{route('concurso.index')}}">Salir</a>
        </p>
    </div>
</div>
