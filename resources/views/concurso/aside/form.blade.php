{!! Form::hidden('concurso_id', $concurso_id) !!}
@for ($i = 0; $i < $n; $i++)
    {!! Form::hidden('preguntas[]', '0', ['id' => 'pregunta'.$i]) !!}
    {!! Form::hidden('respuestas[]', '0', ['id' => 'respuesta'.$i]) !!}
@endfor

@php
    $pregunta = $preguntas->first();
@endphp

<div id="pregunta">
    @include('concurso.aside.pregunta');
</div>

<br>
