@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3 class="p-3">
        <span class="text-primary fs-3 fw-bold"> Crear pregunta</span>
        <div class="float-right p-2">
            <div class="btn-group" role="group" aria-label="Basic example">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success store']) !!}
                <a href="{{route('pregunta.index')}}#preguntas" class="btn btn-primary index">Volver</a>
            </div>
        </div>
    </h3>
    @include('pregunta.aside.info')
    @include('pregunta.aside.error')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route'=>'pregunta.store', 'id'=>'form-pregunta-create']) !!}
                @include('pregunta.aside.form')
                <div class="float-right p-2">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-success store']) !!}
                        <a href="{{route('pregunta.index')}}#preguntas" class="btn btn-primary index">Volver</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

</div>

@endsection
