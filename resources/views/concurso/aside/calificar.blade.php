<div class="card mx-auto" >
    <div class="card-header bg-success">
        <h3 class="text-white"> <strong id="index"> {{$index}} </strong>.- {{$pregunta->pregunta}} </h3>
        {!! Form::hidden('pregunta_id', $pregunta->id, ['id' => 'pregunta_id']) !!}
    </div>
    <div class="card-body">
        @foreach ($pregunta->respuestas as $respuesta)
            @if ($pregunta->escorrecta == 1)
                <a href="#" class="btn btn-success siguiente btn-lg btn-block"> {{$respuesta->respuesta}} </a> <br>
            @elseif($pregunta->id == $mirespuesta->id)
                <a href="#" class="btn btn-danter siguiente btn-lg btn-block"> {{$respuesta->respuesta}} </a> <br>
            @else
                <a href="#" class="btn btn-primary siguiente btn-lg btn-block"> {{$respuesta->respuesta}} </a> <br>
            @endif

        @endforeach
    </div>
</div>
