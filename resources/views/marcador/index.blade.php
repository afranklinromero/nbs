@extends('layouts.app')

@section('contenido')
<div class="container">
    <form action="{{route ('marcador.buscar2') }}" method="GET" class="form-inline">
        {{ csrf_field() }}
        <div class="row">
            <p class="text-center">
                <div class="form-group col-md-12 text-center">
                    <img src="{{ asset('nbs.png')}}" class="d-inline" alt="" srcset="" width="150">
                    {!! Form::text('dato',null,['class'=>'form-control d-inline', 'size'=>'100'])!!}
                    <button class="btn btn-success btn-sm" type="submit"><i class="fas fa-trash"></i>Buscar</button>
                </div>
            </p>
        </div>
    </form>

    @include('marcador.aside.asaide')
    @include('marcador.aside.info')
    <ul class="navbar-nav mr-auto">

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Tapa</th>
            <th scope="col">Descripcion</th>

            </tr>
        </thead>
        <tbody>
            @foreach($marcadores as $marcador)
            <tr>
                <td>
                    <img src="{{ asset('tapas/') }}/{{ $marcador->tapa}}" class="rounded" width="100" alt="" srcset="">
                </td>
                <td>
                    <p class="text-dark"> <strong>marcador ›  </strong> <span class="text-secondary"> {{$marcador->id}}</span></p>
                <h4 class="text-info"><a href="{{ asset('libros') }}/{{$marcador->libro->documentopdf}}#page={{$marcador->pagina}}"> {{ $marcador->nombre }}</a> </h4>
                    <p class="text-muted">
                        <strong class="text-lowercase">libro › </strong> {{ $marcador->libro->titulo}} <br>
                        <strong class="text-lowercase">pagina › </strong> {{ $marcador->pagina}}<br>
                        <strong class="text-lowercase">numero publicación › </strong> {{ $marcador->tipomarcador_id}}<br>
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $marcadores->links() }}
</div>

@endsection
