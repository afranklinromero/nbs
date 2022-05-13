@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    {!! Form::open(['route'=>['pregunta.update', $pregunta->id], 'id'=>'form-pregunta-create']) !!}
    <h3 class="text-success fw-bold fs-4 pb-3">
        Editar pregunta <span class="text-dark">{{ $pregunta->id }}</span>
        <div class="float-right pt-2">
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


                @include('pregunta.aside.form')
                @method('PUT')
                <div class="float-right pt-2">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-success store']) !!}
                        <a href="{{route('pregunta.index')}}#preguntas" class="btn btn-primary index">Volver</a>
                    </div>
                </div>

        </div>
    </div>
    {!! Form::close() !!}

</div>

@endsection
