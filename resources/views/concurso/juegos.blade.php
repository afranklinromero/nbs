@extends('layouts.nbs.app')

@section('contenido')
<div class="container">

    @include('concurso.aside.aside')
    @include('concurso.aside.info')

    <div class="row">
        @foreach($temaconcursos as $temaconcurso)
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <div class="card-header bg-success" >
                    <p class="card-title text-white text-center" >
                        <span class="h3"> <i class="fas fa-running"></i></span>
                        <br>
                        Tema
                        <br>
                        {{ strtoupper($temaconcurso->concurso->nombre) }}
                    </p>
                </div>


                <div class="card-body">
                    <table class="table table-sm table-light">
                        <tbody>
                            <tr>
                                <td class="text-right" width='50%'><span class="text-danger"><i class="fas fa-angle-double-right"></i></span> <strong>Tema: </strong></td>
                                <td class="text-left">{{ $temaconcurso->tema->nombre}}</td>
                            </tr>
                            <tr>
                                <td class="text-right" width='50%'><span class="text-danger"><i class="fas fa-angle-double-right"></i></span> <strong>Fecha de inicio: </strong></td>
                                <td class="text-left">{{ date('d/m/y', strtotime($temaconcurso->concurso->fechaini)) }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><span class="text-danger"><i class="fas fa-angle-double-right"></i></span> <strong>Fecha de Final: </strong></td>
                                <td>{{ date('d/m/y', strtotime($temaconcurso->concurso->fechafin)) }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><span class="text-danger"><i class="fas fa-angle-double-right"></i></span> <strong>Nro. Preguntas: </strong></td>
                                <td>{{ $temaconcurso->concurso->configuracion->nropreguntas }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><span class="text-danger"><i class="fas fa-angle-double-right"></i></span> <strong>Puntos x Respuesta: </strong></td>
                                <td>{{ $temaconcurso->concurso->configuracion->puntosporrespuesta }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><span class="text-danger"><i class="fas fa-angle-double-right"></i></span> <strong>Tiempo: </strong></td>
                                <td>{{ $temaconcurso->concurso->configuracion->tiempolimite }} seg.</td>
                            </tr>

                            <tr>
                                <td class="text-right"><span class="text-danger"><i class="fas fa-angle-double-right"></i></span> <strong>Estado: </strong></td>
                                <td>{{ $temaconcurso->concurso->estado }}</td>
                            </tr>
                        </tbody>

                    </table>
                    <div class="text-right">
                        <a class="btn btn-primary" href="{{ route('concurso.jugar', $temaconcurso->id)}}">Ingresar</a>
                    </div>
                </div>

            </div>
        </div>

        @endforeach
    </div>

</div>



@endsection

