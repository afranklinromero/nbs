@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>ENVIAR COMENTARIO</h3>
    {!! Form::open(['route'=>'sugerenciasnbs.store']) !!}
        {{ csrf_field() }}
        <div class="mb-3">
        {!! Form::label('name', 'Nombre:', ['class' => 'form-label']) !!}
        {!! Form::text('name', 'Alfredo', ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
        {!! Form::label('email', 'Correo:', ['class' => 'form-label']) !!}
        {!! Form::text('email', 'micorreo@nbs.com', ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
        {!! Form::label('subject', 'Asunto:', ['class' => 'form-label']) !!}
        {!! Form::text('subject', 'Este es mi asunto', ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
        {!! Form::label('content', 'Contenido:', ['class' => 'form-label']) !!}
        {!! Form::text('content', 'este es mi contenido', ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
        </div>
        
        
        
        
        
    {!! Form::close() !!}


</div>

@endsection
