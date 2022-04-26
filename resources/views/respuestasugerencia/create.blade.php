@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>Responder sugerencia</h3>
    @include('respuestasugerencia.aside.info')
    @include('respuestasugerencia.aside.error')
    @include('respuestasugerencia.aside.error')
    <div class="row">
        <div class="col-md-12">
            @include('sugerenciasnbs.aside.show')
        </div>
        <div class="col-md-12">
            {!! Form::open(['route'=>'respuestasugerencia.store', 'id'=>'form-pregunta-create']) !!}
                @csrf
                <input type="hidden" name="sugerencianbs_id", value="{{$sugerenciasnbs->id}}">
                @include('respuestasugerencia.aside.form')
                {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                <a href="{{route('sugerenciasnbs.index')}}#preguntas" class="btn btn-success index">Volver</a>
            {!! Form::close() !!}
        </div>
    </div>

</div>

@endsection
