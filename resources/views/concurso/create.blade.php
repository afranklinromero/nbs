@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    {!! Form::open(['route'=>'concurso.store', 'id'=>'form-concurso-create']) !!}
    <div class="row pb-2">
        <div class="col">
            <h3>
                <span class="text-primary"> Crear Olimpiada</span>
                @include('concurso.aside.create-buttons')
            </h3>
        </div>
    </div>

        @include('concurso.aside.info')
        @include('concurso.aside.error')
        <div class="row">
            <div class="col-md-12">
                @include('concurso.aside.form_input')

            </div>
        </div>
        <div class="row pt-2">
            <div class="col">
                @include('concurso.aside.create-buttons')
            </div>
        </div>
    {!! Form::close() !!}
</div>

@endsection
