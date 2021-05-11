@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3 style="color: #d86304">Nueva publicidad</h3>
    {!! Form::open(['route'=>'publicidad.store', 'id'=>'form-publicidad-create', 'enctype'=>"multipart/form-data"]) !!}
        @include('publicidad.aside.form')
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}
        <a href="{{route('concurso.index')}}#publicidades" class="btn btn-success index">Volver</a>

    {!! Form::close() !!}
</div>

@endsection
