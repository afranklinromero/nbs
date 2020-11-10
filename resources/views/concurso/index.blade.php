@extends('layouts.concurso.app')

@section('contenido')
<div class="container">

    <h1 class="text-primary">Concursos</h1>
    @include('concurso.aside.asaide')
    @include('concurso.aside.info')

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/imagen2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Concursar</h5>
                  <p class="card-text">Participa del concurso, respondiendo 10 preguntas</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <a href="{{ route('concurso.juegos') }}" class="btn btn-outline-success">Jugar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/imagen1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ver la clasificacion</h5>
                  <p class="card-text">Mira la clasificación y ve en que lugar estas, tus puntos son acumulativos</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="{{ route('clasificacion.index') }}" class="btn btn-outline-success">Ingresar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/preguntas.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Preguntas</h5>
                  <p class="card-text">Participa del concurso, respondiendo 10 preguntas</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <a class="btn btn-outline-success">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
