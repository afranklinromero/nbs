@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>ENVIAR COMENTARIO</h3>
    {!! Form::open(['route'=>'sugerenciasnbs.store']) !!}
        {{ csrf_field() }}
        {!! Form::label('name', 'Nombre:', ['class' => 'form-group']) !!}
        {!! Form::text('name', 'Alfredo', ['class' => 'form-group']) !!}
        {!! Form::label('email', 'Correo:', ['class' => 'form-group']) !!}
        {!! Form::text('email', 'micorreo@nbs.com', ['class' => 'form-group']) !!}
        {!! Form::label('subject', 'Asunto:', ['class' => 'form-group']) !!}
        {!! Form::text('subject', 'Este es mi asunto', ['class' => 'form-group']) !!}
        {!! Form::label('content', 'Contenido:', ['class' => 'form-group']) !!}
        {!! Form::text('content', 'este es mi contenido', ['class' => 'form-group']) !!}
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}


</div>

@endsection
