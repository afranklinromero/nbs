@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>Crear pregunta</h3>
    @include('pregunta.aside.info')
    @include('pregunta.aside.error')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route'=>'pregunta.store', 'id'=>'form-pregunta-create']) !!}
                @include('pregunta.aside.form')
                {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                <a href="{{route('concurso.index')}}#preguntas" class="btn btn-success index">Volver</a>
            {!! Form::close() !!}
        </div>
    </div>

</div>

@endsection
