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
                    <img class='img-fluid rounded float-left mr-3' src="{{asset('img/publicidad/'. $publicidad->id. '.png')}}" alt="">
                    <p>{{ $publicidad->contenido }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                     <strong>fecha:</strong>  {{ $publicidad->created_at->format('d/m/Y') }}
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
                    @if ($publicidad->estado <> 1)
                        {!! Form::open(['route'=>['publicidad.update', $publicidad->id]]) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('estado', '1') !!}
                        {!! Form::submit('Aprobar', ['class' => 'btn btn-success btn-update']) !!}
                        {!! Form::close() !!}
                    @endif

                    &nbsp;

                    @if ($publicidad->estado <> 0)
                        {!! Form::open(['route'=>['publicidad.update', $publicidad->id]]) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('estado', '0') !!}
                        {!! Form::submit('Rechazar', ['class' => 'btn btn-danger btn-update']) !!}
                        {!! Form::close() !!}
                    @endif

                    &nbsp;

                    @if ($publicidad->estado <> 2)
                        {!! Form::open(['route'=>['publicidad.update', $publicidad->id]]) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('estado', '2') !!}
                        {!! Form::submit('Pasar a pendiente', ['class' => 'btn btn-warning btn-update']) !!}
                        {!! Form::close() !!}
                    @endif
                @endif
            @endif
            
        </div>
    </div>
</div>
@endif