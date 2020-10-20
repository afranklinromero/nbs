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
                    {!! Form::hidden('libro_id', $marcadores->first()->libro->id) !!}
                    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>' &#x1F50D; Introduzca su busqueda aqui', 'size'=>'100'])!!}
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
                <h4 class="text-info">
                    <a href="{{ asset('libros') }}/{{$marcador->libro->documentopdf}}#page={{$marcador->pagina}}">
                        @for($i = 1; $i <= ($marcador->nivel -1)*3; $i++) &nbsp; @endfor {{ $marcador->nombre }}
                    </a>
                </h4>
                    <p class="text-muted">
                        <strong class="text-lowercase">Numero › </strong> {{ $marcador->numero}} &nbsp;&nbsp;&nbsp;
                        <strong class="text-lowercase">pagina › </strong> {{ $marcador->pagina}} &nbsp;&nbsp;&nbsp;
                        <strong class="text-lowercase">numero publicación › </strong> {{ $marcador->tipomarcador_id}}
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $marcadores->links() }}
</div>

@endsection
