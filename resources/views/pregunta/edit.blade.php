@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <p class="text-success fw-bold fs-4">Editar pregunta <span class="text-dark">{{ $pregunta->id }}</span> </p>
    @include('pregunta.aside.info')
    @include('pregunta.aside.error')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route'=>['pregunta.update', $pregunta->id], 'id'=>'form-pregunta-create']) !!}
                @include('pregunta.aside.form')
                @method('PUT')
                {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                <a href="{{route('concurso.index')}}#preguntas" class="btn btn-success index">Volver</a>
            {!! Form::close() !!}
        </div>
    </div>

</div>

@endsection
