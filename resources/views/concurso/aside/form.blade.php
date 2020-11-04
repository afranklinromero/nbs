
@foreach ($preguntas as $pregunta)
    @foreach ($pregunta->respuestas as $respuesta)
        {!! Form::hidden('respuesta[]', null) !!}
    @endforeach
@endforeach

@php
    $pregunta = $preguntas->first();
@endphp

<div class="card">
    <div class="card-header">
        <h3 class="text-success"> 1.- {{$pregunta->pregunta}} </h3>
    </div>
    <div class="card-body">
        @foreach ($pregunta->respuestas as $respuesta)
            <button class="btn btn-success" id="{{ $respuesta->id }}"> {{$respuesta->respuesta}} </button> <br><br>
        @endforeach
    </div>
</div>
<br>

<div class="form-group">
    {!! Form::submit('Guardar',['step' => 'any','class'=>'btn btn-success']) !!}
    <a href="{{ url()->previous() }}" class="btn btn-warning text-white"><i class="fas fa-arrow-left">  </i> Volver</a>
</div>
