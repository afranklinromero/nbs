@extends('layouts.app')

@section('contenido')
<div class="container">
    <form action="{{route ('marcador.buscar2') }}" method="GET" class="form-inline">
        {{ csrf_field() }}
        <div class="row">
            <p class="text-center">
                <h3 class="text-muted text-center"> Buscar en <u>{{ $marcadores->first()->libro->titulo }} </u></h3>
                <div class="form-group col-md-12 text-center">
                    <a href="{{ route('libro.index') }}">
                        <img class="mb-3" src="{{ asset('nbs.jpg')}}" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="" width="100">
                    </a>
                    {!! Form::text('dato',null,['class'=>'form-control','placeholder'=>' &#x1F50D; Introduzca su busqueda aqui', 'size'=>'100'])!!}
                    <button class="btn btn-success" type="submit"><i class="fas fa-search"></i>Buscar</button>
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
