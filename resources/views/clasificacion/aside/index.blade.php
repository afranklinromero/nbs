<h3 id="clasificacion" class="text-primary text-center">TABLAS DE CLASIFICACION</h3>
<div class="row">
    @foreach($temaconcursos as $temaconcurso)
    <div class="col-md-12">
        <div class="card mb-3 shadow">
            <div class="card-body">
                <h5 class="card-title text-success">OLIMPIADA: {{ $temaconcurso->concurso->nombre }}</h5>
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
                        @endphp
                        @foreach($temaconcurso->concurso->clasificaciones->sortByDesc('puntos') as $clasificacion)
                        <tr>
                            @if ($nro<=10)
                                <td> {{ $nro }}° </td>
                                <td> {{ $clasificacion->usuario->name }} </td>
                                <td> {{ $clasificacion->puntos }} </td>
                            @endif

                            @php
                                $nro++;
                            @endphp
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endforeach
</div>
