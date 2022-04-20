@extends('layouts.nbs.app')

@section('contenido')


<div class="container">

    <form action="{{route ('libro.index') }}" method="GET" class="d-inline">
        {{ csrf_field() }}

        <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('img/publicidad.jpg')}}" class="img-fluid" >
                </div>
            </div>
            </div>
        </div>
        <p class="text-center">
             <!-- Contador de visitas -->
            <center>
                <a href="https://websmultimedia.com/contador-de-visitas-gratis" title="Contador De Visitas Gratis">
                    <img style="border: 0px solid; display: inline;" alt="contador de visitas" src="https://websmultimedia.com/contador-de-visitas.php?id=1068"></a>
                    <br>
                    <a href='https://websmultimedia.com/contador-de-visitas-gratis'></a>
                    <br>
                    <a href='http://boxindian.com/'>
                    </a>
                </center>
                <!-- Fin Contador de visitas -->
            <br>
            <a href='http://www.websmultimedia.com/contador-de-visitas-gratis'></a><br><a href='http://www.websmultimedia.com/diseno-logotipos'></a>
                <!-- Fin Contador de visitas -->
            <div class="form-group text-center">
                <a href="{{ route('libro.index') }}">
                    <img class="mb-3" src="{{ asset('img/logo.nobosa1.svg')}}" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="" height="75">
                </a>
                <div>
                    {!! Form::text('titulo', null,['class'=>'form-control caja input-  titulo','placeholder'=>' &#x1F50D; Introduzca su busqueda aquí', 'id' => 'input-titulo'])!!}
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

    $(document).ready(function(){
         $("#mostrarmodal").modal("show");
    });


    $(document).on('keypress', '.input-titulo', function(e) {
        if(e.which == 13) {
            event.preventDefault();
            var form = $(this).parent().parent().parent();
            console.log("ruta busqueda tecla enter: " + form.attr('action'));
            $.get(form.attr('action'), form.serialize(), function(result){
                $('#datos').html(result);
            });
        }
    });

    $(document).on('click', '.titulo', function(e) {
        event.preventDefault();
        var form = $(this).parent();
        console.log("ruta busqueda click: " + form.attr('action'));
        $.get(form.attr('action'), form.serialize(), function(result){
            $('#datos').html(result);
        });
    });


    $(document).on('click', '.submitshow', function(e) {
        event.preventDefault();
        var form = $(this).parent().parent();
        form.submit();
    });


</script>
@endsection
