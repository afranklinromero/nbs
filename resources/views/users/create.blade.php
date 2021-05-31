@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3 class="text-success">Crear cuenta nobosa</h3>
    @include('users.aside.error')
    <div class="row">
        <div class="col-md-6 text-center">
            <img class="img-fluid" width="300" src="{{asset('img/log-img.png')}}" alt="">
        </div>
        <div class="col-md-6">
            {!! Form::open(['route'=>'users.store']) !!}
                {!! Form::hidden('tipo','create', null) !!}
                @include('users.aside.form')
                <div class="row">
                    <div class="col-md-12 text-right">
                        {!! Form::submit('Registrar',['step' => 'any','class'=>'btn btn-success btn-sm']) !!}
                        <a href="{{route('libro.index')}}" class="btn btn-danger btn-sm index">Cancelar</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        
    </div>
</div>

@endsection



