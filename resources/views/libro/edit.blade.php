@extends('template')

@section('contenido')
<div class="container">
    @include('tipoproductos.aside.asaide')
    @include('tipoproductos.aside.error')
    {!! Form::model($tipoproducto,['route'=>['tipoproductos.update',$tipoproducto->id],'method'=>'PUT']) !!}
        <div class="row">
            <div class="col-md-6">
                @include('tipoproductos.aside.form')
            </div>
        </div>
    {!! Form::close() !!}
<div>
@endsection
