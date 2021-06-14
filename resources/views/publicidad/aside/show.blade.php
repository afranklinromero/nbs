@include('publicidad.aside.info')
<!--<h3 class="text-success">{{$publicidad->titulo}}</h3>-->
<div class="row">
    <div class="col-md-12">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 text-justify">
                    <a href="{{$publicidad->link}}" target='_blank'><img class='img-fluid rounded float-left mr-3' src="{{asset('storage/files/publicidad/'. $publicidad->id. '/' .$publicidad->id . '.' .$publicidad->ext)}}" width="50%" alt=""></a> 
                    <p><strong >Contenido: </strong> {{ $publicidad->contenido }}</p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-3 alert alert-secondary">
                    <p>
                        <strong>Enlace:</strong>  {{ $publicidad->link }}<br>
                        <strong>Lugar:</strong>  {{ $publicidad->lugar }}<br>
                        <strong>fecha inicio:</strong>  {{ $publicidad->fechaini->format('d/m/Y') }}<br>
                        <strong>fecha fin:</strong>  {{ $publicidad->fechafin->format('d/m/Y') }}<br>
                        <strong>fecha creación:</strong>  {{ $publicidad->created_at->format('d/m/Y') }}<br>
                        <strong>fecha actualización:</strong>  {{ $publicidad->updated_at->format('d/m/Y') }}<br>
                    </p>
                </div>
            </div>
    </div>
</div>

@if (isset($publicidad))
    <div class="row">
        <div class="col-md-12">
            <div class="row justify-content-center">
                @if (Auth::user()!=null)
                    @if (Auth::user()->hasRole('admin'))
                        {!! Form::open(['route'=>['publicidad.update', $publicidad->id]]) !!}
                            {!! Form::hidden('_method', 'PUT') !!}
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-warning" href="{{ route('publicidad.edit', $publicidad->id) }}">Editar</a>
                                @if ($publicidad->estado == 1)
                                    {!! Form::hidden('tipo', 'baja') !!}
                                    {!! Form::submit('Dar de baja', ['class' => 'btn btn-danger btn-update']) !!}
                                @endif
                                @if ($publicidad->estado == 0)
                                    {!! Form::hidden('tipo', 'alta') !!}
                                    {!! Form::submit('Dar de alta', ['class' => 'btn btn-success btn-update']) !!}
                                @endif
                                <a class="btn btn-success" href="{{ route('publicidad.create') }}">Nuevo</a>
                            </div>
                        {!! Form::close() !!}
                    @endif
                @endif
                
            </div>
        </div>
    </div>
@endif