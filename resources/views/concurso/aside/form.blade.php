
@php
    $i = 1;
@endphp
@foreach ($preguntas as $pregunta)
<div class="card" style="display: {{ ($i==1)? 'block': 'none' }}">
    <div class="card-header">
        <h3 class="text-success">  {{$pregunta->pregunta}} </h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            @foreach ($pregunta->respuestas as $respuesta)
                <button onclick="siguiente()" class="btn btn-info"> {{ $respuesta->respuesta }}</button><br><br>
            @endforeach
        </div>
    </div>
</div>
<br>
@php
    $i++;
@endphp
@endforeach

<div class="form-group">
    {!! Form::submit('Guardar',['step' => 'any','class'=>'btn btn-success']) !!}
    <a href="{{ url()->previous() }}" class="btn btn-warning text-white"><i class="fas fa-arrow-left">  </i> Volver</a>
</div>
