@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <form action="{{route ('libro.index') }}" method="GET" class="d-inline">
        {{ csrf_field() }}
        <p class="text-center">
            <div class="form-group text-center">

                <a href="{{ route('libro.index') }}">
                    <img class="mb-3" src="{{ asset('img/logo.nobosa.png')}}" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="" width="50%">
                </a>
                <div>
                    {!! Form::text('titulo', null,['class'=>'form-control caja titulo','placeholder'=>' &#x1F50D; Introduzca su busqueda aqui', 'id' => 'titulo'])!!}
                </div>
            </div>
            <!-- <div class="form-group col-md-12 text-center" >
            <button class="btn btn-success btn-sm" type="submit"><i class="fas fa-trash"> </i> Buscar</button>
            </div> -->
        </p>
        
    </form>

    @include('libro.aside.asaide')
    @include('libro.aside.info')
    @include('libro.aside.index-datos')
</div>

@endsection

@section('scriptlocal')
<script>
    $(document).on('keypress', '.titulo', function(e) {
        if(e.which == 13) {
            event.preventDefault();
            var form = $(this).parent().parent().parent();
            console.log("ruta busqueda tecla enter: " + form.attr('action'));
            
            $.get(form.attr('action'), form.serialize(), function(result){
                //console.log(result);
                $('#datos').html(result);
            });
        }
    });

    $(document).on('click', '.titulo', function(e) {
        event.preventDefault();
        var form = $(this).parent();
        console.log("ruta busqueda click: " + form.attr('action'));
        
        $.get(form.attr('action'), form.serialize(), function(result){
            //console.log(result);
            $('#datos').html(result);
        });
    });

    $(document).on('click', '.pagination a', function(e) {
        event.preventDefault();
        alert('hi pagination');
        //var page = route.split('page=')[1];
        //route = $('#pagination').attr('href');
        //console.log(route);
        //alert(route);
        /*
        $.get(route,  function(result){
            //console.log(result);
            $('#pagination').html(result);
            //alert(result);
        });
        */
    });
</script>
@endsection
