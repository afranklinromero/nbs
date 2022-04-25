@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <a class="h3 text-success fw-bold">Editar datos de olimpiada <span class="text-dark">{{ isset($concurso->id)? $concurso->id : '' }}</span></a>
    @include('concurso.aside.info')
    @include('concurso.aside.error')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route'=>['concurso.update', $concurso->id], 'id'=>'form-concurso-create']) !!}
                @method('PUT')
                @include('concurso.aside.form_input')
                <div class="form-group row mt-3">
                    <div class="col md-12 text-right">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}
                        <a href="{{route('concurso.index')}}" class="btn btn-success index">Volver</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
