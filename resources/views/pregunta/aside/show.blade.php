@include('pregunta.aside.info')
<h3>{{$pregunta->subject}}</h3>
<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <h4 class="me-md-2"><span class="text-muted"> Enunciado:</span> <strong>{{$pregunta->pregunta}}</strong></h4>
        </div>
    </div>
    <div class="col-md-6">
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
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <p class="text-muted"><strong>Tema </strong>{{ $pregunta->tema->nombre }}</p> &nbsp;|&nbsp;
            <p class="text-muted"><strong>Autor </strong>{{ $pregunta->user->name }}</p> &nbsp;|&nbsp;
            <p class="btn btn-sm {{ $btn }} text-white"><strong>Estado </strong> {{ $testado }}
            </p>
        </div>
    </div>
</div>

<div class="row">
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
    @if (Auth::user()->hasRole('admin'))
        {!! Form::open(['route'=>['pregunta.update', $pregunta->id]]) !!}
        {!! Form::hidden('_method', 'PUT') !!}
        {!! Form::hidden('estado', '1') !!}
        {!! Form::submit('Aprobar', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
        &nbsp;
        {!! Form::open(['route'=>['pregunta.update', $pregunta->id]]) !!}
        {!! Form::hidden('_method', 'PUT') !!}
        {!! Form::hidden('estado', '0') !!}
        {!! Form::submit('Rechazar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        &nbsp;
        {!! Form::open(['route'=>['pregunta.update', $pregunta->id]]) !!}
        {!! Form::hidden('_method', 'PUT') !!}
        {!! Form::hidden('estado', '2') !!}
        {!! Form::submit('Pendiente', ['class' => 'btn btn-warning']) !!}
        {!! Form::close() !!}
    @endif
    
</div>


