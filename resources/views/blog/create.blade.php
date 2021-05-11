@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>Nuevo artitulo</h3>
    {!! Form::open(['route'=>'blog.store', 'id'=>'form-blog-create', 'enctype'=>"multipart/form-data"]) !!}
        @include('blog.aside.form')
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}
        <a href="{{route('concurso.index')}}#blogs" class="btn btn-success index">Volver</a>

    {!! Form::close() !!}
</div>

@endsection
