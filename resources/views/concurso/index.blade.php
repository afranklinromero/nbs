@extends('layouts.nbs.app')

@section('contenido')
<div class="container">

    <h1 id="topolimpiada" class="text-primary">OLIMPIADAS DE CONOCIMIENTO</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/imagen2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Olimpiadas de Conocimiento en Normas de Salud</h5>
                  <p class="card-text">Participa de esta olimpiada, respondiendo 10 preguntas en un determinado tiempo, mientras mas participes tendras mas oportunidad de ganar</p>
                  <a href="#olimpiadas" class="btn btn-outline-success">Ingresar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/imagen1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ver la clasificacion</h5> <br>
                  <p class="card-text">Mira la clasificación en linea, y ve en que lugar estas, tus puntos son acumulativos, mientras mas participes tendras mas oportunidades de ganar.</p>
                    <a href="#clasificacion" class="btn btn-outline-success">Ingresar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/preguntas.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Preguntas</h5><br>
                  <p class="card-text">Puedes sugerir algunas preguntas para las olimpiadas, tu pregunta será evaluada por nuestro equipo, y se mostrará con tu nombre en la olimpiada.</p>
                  <a href="{{route('pregunta.create')}}" class="btn btn-outline-success">Registrar</a>
                  <a href="#preguntas" class="btn btn-outline-success">Ver mis preguntas</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="container" id="concurso-body">
        @include('concurso.aside.index')
    </div>
    
    @include('concurso.index.concurso')
    <hr>

    @include('concurso.index.pregunta')
    <hr>
    @include('concurso.index.clasificacion')
</div>
@endsection
