
<h3 id="clasificacion" class="text-primary text-center">TABLAS DE CLASIFICACION</h3>
@include('concurso.aside.aside.clasificacion')
@include('concurso.aside.info.clasificacion')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3 shadow">
            <div class="card-body">
        @foreach($temaconcursos as $temaconcurso)
            <div class="col-md-12">
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-success">CLASIFICACION OLIMPIADA: {{ $temaconcurso->concurso->nombre }}</h5>
                        <p class="card-text">
                            <strong>Fecha de inicio: </strong> {{ $temaconcurso->concurso->fechaini }}  <br>
                            <strong>Fecha de Finalizacion: </strong> {{ $temaconcurso->concurso->fechafin }}  <br>
                        </p>
                        <p class="card-text"><small class="text-muted">Clasificación top 10</small></p>
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
                                    $topclasificacion = $temaconcurso->concurso->clasificaciones->sortByDesc('puntos');
                                    $entop = false;
                                @endphp
                                @foreach($topclasificacion as $clasificacion)
                                    @if ($nro<=10)
                                        @if (Auth::user()->id == $clasificacion->usuario->id)
                                            @php $entop = true; @endphp
                                            <tr class="bg-success text-white">
                                                <td> {{ $nro }}° </td>
                                                <td>*** {{ $clasificacion->usuario->name }} 
                                                <td> {{ $clasificacion->puntos }} </td>
                                            </tr>
                                            
                                        @else
                                            <tr>
                                                <td> {{ $nro }}° </td>
                                                <td> {{ $clasificacion->usuario->name }} 
                                                <td> {{ $clasificacion->puntos }} </td>
                                            </tr>
                                        @endif
                                    @else
                                        @if (!$entop && Auth::user()->id == $clasificacion->usuario->id)
                                            <tr class="bg-success text-white">
                                                <td> {{ $nro }}° </td>
                                                <td>*** {{ $clasificacion->usuario->name }} 
                                                <td> {{ $clasificacion->puntos }} </td>
                                            </tr>
                                        @endif
                                    @endif
                                    @php $nro++; @endphp
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
    
</div>
