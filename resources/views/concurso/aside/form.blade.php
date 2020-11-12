<div class="text-danger" id="testdiv">0/60</div>
<input type="range" min="0" max="60" step="1" value="60" id="tiempo1" name="tiempo1" readonly width="100%">
{!! Form::hidden('tiempo', '0', ['id' => 'tiempo']) !!}
{!! Form::hidden('concurso_id', $concurso_id) !!}
@for ($i = 0; $i < $n; $i++)
    {!! Form::hidden('preguntas[]', '0', ['id' => 'pregunta'.$i]) !!}
    {!! Form::hidden('respuestas[]', '0', ['id' => 'respuesta'.$i]) !!}
@endfor

@php
    $pregunta = $preguntas->first();
@endphp

<div id="pregunta">
    @include('concurso.aside.pregunta')
</div>

<br>
