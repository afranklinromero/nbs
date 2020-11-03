@extends('layouts.concurso.app')

@section('contenido')
<div class="container">

    @include('clasificacion.aside.asaide')
    @include('clasificacion.aside.info')

    <div class="row">
        @foreach($concursos as $concurso)
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/concursomalaria.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $concurso->nombre }}</h5>
                    <p class="card-text"> <strong>Fecha de inicio: </strong> {{ $concurso->fechaini }}  </p>
                    <p class="card-text"> <strong>Fecha de Finalizacion: </strong> {{ $concurso->fechafin }}  </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Puesto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Puntos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $nro = 1;
                            @endphp
                            @foreach($concurso->clasificaciones->sortByDesc('puntos') as $clasificacion)
                            <tr>
                                <td> {{ $nro }}° </td>
                                <td> {{ $clasificacion->usuario->name }} </td>
                                <td> {{ $clasificacion->puntos }} </td>
                                @php
                                    $nro++;
                                @endphp
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-outline-success">Ingresar</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</div>



@endsection
