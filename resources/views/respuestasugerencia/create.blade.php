@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>Responder sugerencia</h3>
    @include('respuestasugerencia.aside.info')
    @include('respuestasugerencia.aside.error')
    <div class="row">
        <div class="col-md-12">
            @include('sugerencia.aside.show')
        </div>
        <div class="col-md-12">
            {!! Form::open(['route'=>'respuestasugerencia.store', 'id'=>'form-pregunta-create']) !!}
                @csrf
                <input type="hidden" name="sugerencia_id", value="{{$sugerencia->id}}">
                @include('respuestasugerencia.aside.form')
                {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                <a href="{{route('sugerencia.index')}}#preguntas" class="btn btn-success index">Volver</a>
            {!! Form::close() !!}
        </div>
    </div>

</div>

@endsection
