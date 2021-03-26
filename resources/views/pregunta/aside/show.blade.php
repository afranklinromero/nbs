@include('pregunta.aside.info')
<h3>{{$pregunta->subject}}</h3>
<div class="row">
    <div class="col-md-12">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <h4 class="me-md-2"><span class="text-muted"> Enunciado:</span> <strong>{{$pregunta->pregunta}}</strong></h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @php
        $btn = "";
        $testado = "";
            switch($pregunta->estado){
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
        <p class="text-muted">
            <div class="row">
                <div class="col-md-5"><strong>Tema: </strong>{{ $pregunta->tema->nombre }}</div>
                <div class="col-md-5"><strong>Autor: </strong>{{ $pregunta->user->name }}</div>
                <div class="col-md-2"><strong class="btn btn-sm {{$btn}}"> {{ $testado }} </strong></div>
            </div>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Respuesta</th>
                    <th scope="col">Correcto?</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($pregunta->respuestas as $key => $item)
                        <tr class = {{ ($item->escorrecta==1)?'table-success':"" }}>
                            <th scope="row"> {{$key+1}}</th>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->respuesta }}</td>
                            <td>
                                @if ($item->escorrecta==1)
                                    <i class='text-success fas fa-check-circle'></i>
                                @else
                                    <i class="text-danger fas fa-times-circle"></i>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>  
</div>
@if (isset($preguntas))
    

<div class="row">
    <div class="col-md-12">
        <div class="row justify-content-center">
            <a href="{{route('pregunta.index', ['page'=>$preguntas->currentPage()])}}" id="preguntaPage"></a>
            @if (Auth::user()->hasRole('admin'))
                @if ($pregunta->estado <> 1)
                    
                    {!! Form::open(['route'=>['pregunta.update', $pregunta->id]]) !!}
                    {!! Form::hidden('_method', 'PUT') !!}
                    {!! Form::hidden('pagePregunta', $preguntas->currentPage()) !!}
                    {!! Form::hidden('estado', '1') !!}
                    {!! Form::submit('Aprobar', ['class' => 'btn btn-success btn-update']) !!}
                    {!! Form::close() !!}
                @endif

                &nbsp;

                @if ($pregunta->estado <> 0)
                    {!! Form::open(['route'=>['pregunta.update', $pregunta->id]]) !!}
                    {!! Form::hidden('_method', 'PUT') !!}
                    {!! Form::hidden('pagePregunta', $preguntas->currentPage()) !!}
                    {!! Form::hidden('estado', '0') !!}
                    {!! Form::submit('Rechazar', ['class' => 'btn btn-danger btn-update']) !!}
                    {!! Form::close() !!}
                @endif

                &nbsp;

                @if ($pregunta->estado <> 2)
                    {!! Form::open(['route'=>['pregunta.update', $pregunta->id]]) !!}
                    {!! Form::hidden('_method', 'PUT') !!}
                    {!! Form::hidden('pagePregunta', $preguntas->currentPage()) !!}
                    {!! Form::hidden('estado', '2') !!}
                    {!! Form::submit('Pasar a pendiente', ['class' => 'btn btn-warning btn-update']) !!}
                    {!! Form::close() !!}
                @endif
            @endif
        </div>
    </div>
</div>
@endif