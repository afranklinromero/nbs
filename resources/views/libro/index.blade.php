@extends('layouts.app')

@section('contenido')
<div class="container">
    <form action="{{route ('libro.buscar') }}" method="GET" class="d-inline">
        {{ csrf_field() }}

        <div class="row">
            <p class="text-center">
                <div class="form-group col-md-12 text-center">

                    <a href="{{ route('libro.index') }}">
                        <img class="mb-3" src="{{ asset('nbs.jpg')}}" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="" width="25%">
                    </a>
                    <h3 class="text-success"><strong> Normas Bolivianas de Salud </strong></h3>
                    <div class="row">

                        <div class="col-md-2" ></div>



                        <div class="col-md-8 ">{!! Form::text('dato',$dato,['class'=>'form-control caja','placeholder'=>' &#x1F50D; Introduzca su busqueda aqui', 'onkeypress' => "myFunction();"])!!}</div>
                        <div class="col-md-2"></div>


                    </div>
                </div>
               <!-- <div class="form-group col-md-12 text-center" >
                <button class="btn btn-success btn-sm" type="submit"><i class="fas fa-trash"> </i> Buscar</button>
                </div> -->
            </p>
        </div>
    </form>

    @include('libro.aside.asaide')
    @include('libro.aside.info')

   <table class="table">
        <thead>
            <tr>
            <th scope="col">Tapa</th>
            <th scope="col">Descripcion</th>

            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
            <tr>
                <td>
                    <img src="{{ asset('tapas/') }}/{{ $libro->tapa}}" class="rounded" width="100" alt="" srcset="">
                </td>
                <td>
                <p class="text-dark"> <strong>libro ›  </strong> <span class="text-secondary"> {{$libro->documentopdf}}</span> &nbsp; <strong>id: </strong>{{$libro->id }}</p>
                    <h4 class="text-info"><a href="{{ route('marcador.buscar1', ['libro_id' => $libro->id, 'nombre' => '']) }}"> {{ $libro->titulo }}</a> </h4>
                    <p class="text-muted">
                        <strong class="text-lowercase">serie › </strong> {{ $libro->serie}} <br>
                        <strong class="text-lowercase">lugar publicacion › </strong> {{ $libro->lugarpublicacion}}<br>
                        <strong class="text-lowercase">numero publicación › </strong> {{ $libro->nropublicacion}}<br>
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>


    </table>
    {{ $libros->links() }}
    </div>

</div>



@endsection
