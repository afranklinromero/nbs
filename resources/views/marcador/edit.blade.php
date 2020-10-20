@extends('layouts.app')

@section('contenido')
<div class="container">
    <p class="h4 text-success text-center"><i class="far fa-file"></i> EDITAR LIBRO</p>
    @include('libro.aside.asaide')
    @include('libro.aside.error')

    {!! Form::model($libro,['route'=>['libro.update',$libro->id],'method'=>'PUT']) !!}
        <div class="row">
            <div class="col-md-6">
                @include('libro.aside.form')
            </div>
        </div>
    {!! Form::close() !!}
<div>
@endsection
