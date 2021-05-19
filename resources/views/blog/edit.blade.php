@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>Editar articulo</h3>
    {!! Form::open(['route'=>['blog.update', $blog->id], 'id'=>'form-blog-create', 'enctype'=>"multipart/form-data"]) !!}
        @method('PUT')
        @include('blog.aside.form')
        <br>
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}
        <a href="{{route('blog.index')}}#blogs" class="btn btn-success index">Volver</a>

    {!! Form::close() !!}
</div>

@endsection
