@include('concurso.aside.info')
<h3>{{$concurso->subject}}</h3>
<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <h4 class="me-md-2"><span class="text-muted"> Nombre:</span> <strong>{{$concurso->nombre}}</strong></h4>
        </div>
    </div>
    <div class="col-md-6">
        @php
        $btn = "";
        $testado = "";
            switch($concurso->estado){
                case 0:
                    $btn = "btn-danger";
                    $testado = "Anulado";
                    break;
                case 1:
                    $btn = "btn-success";
                    $testado = "Activo";
                    break;
                case 2:
                    $btn = "btn-warning";
                    $testado = "Pendiente";
                    break;
            }
        @endphp
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <p class="btn btn-sm {{ $btn }} text-white"><strong>Estado </strong> {{ $testado }}
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-light">
            <tbody>
                <tr class="bg-success">
                    <td colspan="2"><strong class="text-white">Datos concurso</strong></td>
                </tr>
                <tr>
                    <td><strong>Id: </strong></td>
                    <td>{{ $concurso->id }}</td>
                </tr>
                <tr>
                    <td><strong>Nombre: </strong></td>
                    <td>{{ $concurso->nombre }}</td>
                </tr>
                <tr>
                    <td><strong>Descripcion: </strong></td>
                    <td>{{ $concurso->descripcion }}</td>
                </tr>
                <tr>
                    <td><strong>Fecha Inicio:</strong></td>
                    <td>{{ $concurso->fechaini }}</td>
                </tr>
                <tr>
                    <td><strong>Fecha Finalizacion</strong></td>
                    <td>{{ $concurso->fechafin }}</td>
                </tr>
                <tr>
                    <td><strong>Estado</strong></td>
                    <td>{{ $concurso->estado }}</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</strong></td>
                </tr>
                <tr class="bg-success">
                    <td colspan="2"><strong class="text-white">Configuracion del concurso</strong></td>
                </tr>
                <tr>
                    <td><strong>Número de preguntas: </strong></td>
                    <td>{{ $concurso->configuracion->nropreguntas }}</td>
                </tr>
                <tr>
                    <td><strong>Respuestas incorrectas permitidas: </strong></td>
                    <td>{{ $concurso->configuracion->limiterespuestaserroneas }}</td>
                </tr>
                <tr>
                    <td><strong>Puntos por respuesta correcta: </strong></td>
                    <td>{{ $concurso->configuracion->puntosporrespuesta }}</td>
                </tr>
                <tr>
                    <td><strong>Tiempo para responder las preguntas:</strong></td>
                    <td>{{ $concurso->configuracion->tiempolimite }} seg.</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row justify-content-center">
            @if (Auth::user()->hasRole('admin'))
                @if ($concurso->estado == 1)
                    {!! Form::open(['route'=>['concurso.update', $concurso->id]]) !!}
                    {!! Form::hidden('_method', 'PUT') !!}
                    {!! Form::hidden('estado', '0') !!}
                    {!! Form::submit('Finalizar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endif

                @if ($concurso->estado == 0)
                    {!! Form::open(['route'=>['concurso.update', $concurso->id]]) !!}
                    {!! Form::hidden('_method', 'PUT') !!}
                    {!! Form::hidden('estado', '0') !!}
                    {!! Form::submit('Habilitar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                @endif

            @endif
        </div>
    </div>
</div>




