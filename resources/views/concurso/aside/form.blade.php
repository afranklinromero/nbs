<!--<div class="text-danger" id="testdiv">00:00</div>-->
<div class="progress">
    <div id="progress" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%">00:00</div>
</div>
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
