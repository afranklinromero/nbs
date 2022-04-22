@extends('layouts.app')

@section('contenido')
<div class="container">
    <p class="h4 text-success text-center"><i class="far fa-file"></i> EDITAR concurso</p>
    @include('concurso.aside.error')

    {!! Form::model($concurso,['route'=>['concurso.update',$concurso->id],'method'=>'PUT']) !!}
        <div class="row">
            <div class="col-md-6">
                @include('concurso.aside.form')
            </div>
        </div>
    {!! Form::close() !!}
<div>
@endsection
