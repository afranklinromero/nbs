@extends('layouts.nbs.app')

@section('contenido')
<div class="container">

    @include('concurso.aside.asaide')
    @include('concurso.aside.info')

    <div class="row">
        @foreach($temaconcursos as $temaconcurso)
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <div class="card-header bg-primary" >
                    <h5 class="card-title text-white" ><strong>Tema: </strong>{{ $temaconcurso->concurso->nombre }}</h5>
                </div>
                <img src="{{ asset('img') }}/{{ $temaconcurso->concurso->picture }}" class="card-img-top" alt="...">
                <div class="card-body">

                    <p class="card-text"> <strong>Fecha de inicio: </strong> {{ $temaconcurso->concurso->fechaini }}  </p>
                    <p class="card-text"> <strong>Fecha de Final: </strong> {{ $temaconcurso->concurso->fechafin }}  </p>
                    <p class="card-text"> <strong>Nro. Preguntas: </strong> {{ $temaconcurso->concurso->configuracion->nropreguntas }}  </p>
                    <p class="card-text"> <strong>Puntos x Respuesta: </strong> {{ $temaconcurso->concurso->configuracion->puntosporrespuesta }}  </p>

                    <p class="card-text"> <strong>Tiempo: </strong> {{ $temaconcurso->concurso->configuracion->tiempo }} seg. </p>
                    <p class="card-text"> <strong>Tema: </strong> {{ $temaconcurso->tema->nombre }}  </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a class="btn btn-danger" href="{{ route('concurso.jugar', $temaconcurso->id)}}">Ingresar</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</div>



@endsection

