@extends('template')

@section('contenido')
<div class="container">
    <p class="h4 text-success text-center"><i class="far fa-file"></i> CREAR NUEVO TIPO PRODUCTO</p>
    @include('tipoproductos.aside.error')
    {!! Form::open(['route'=>'tipoproductos.store']) !!}
        <div class="row">
            <div class="col-md-6">
                @include('tipoproductos.aside.form')
            </div>
        </div>
    {!! Form::close() !!}
</div>

@endsection


