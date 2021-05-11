@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>Editar articulo</h3>
    {!! Form::open(['route'=>['publicidad.update', $publicidad->id], 'id'=>'form-publicidad-create', 'enctype'=>"multipart/form-data"]) !!}
        @method('PUT')
        @include('publicidad.aside.form')
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}
        <a href="{{route('concurso.index')}}#publicidades" class="btn btn-success index">Volver</a>

    {!! Form::close() !!}
</div>

@endsection
