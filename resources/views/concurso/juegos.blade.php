@extends('layouts.concurso.app')

@section('contenido')
<div class="container">

    @include('concurso.aside.asaide')
    @include('concurso.aside.info')

    <div class="row">
        @foreach($concursos as $concurso)
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="http://lorempixel.com/400/200/nightlife" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $concurso->nombre }}</h5>
                    <p class="card-text"> <strong>Fecha de inicio: </strong> {{ $concurso->fechaini }}  </p>
                    <p class="card-text"> <strong>Fecha de Finalizacion: </strong> {{ $concurso->fechafin }}  </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a class="btn btn-danger" href="{{ route('concurso.iniciarjuego', $concurso->id)}}">Ingresar</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</div>



@endsection
