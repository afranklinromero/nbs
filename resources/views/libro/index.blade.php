@extends('layouts.nbs.app')

@section('contenido')


<div class="container">
    
    <form action="{{route ('libro.index') }}" method="GET" class="d-inline">
        {{ csrf_field() }}

<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <img class="publicidad text-center" src="<?php echo "img/publicidad.jpg"; ?> ">
        </div>
    </div>
    </div>
</div>
        <p class="text-center">

              <!-- Contador de visitas -->
<a title="Contador De Visitas">
<!-- Button trigger modal -->

<!-- Modal -->
<img style="border: 0px solid; display: inline;" alt="contador de visitas" src="http://www.websmultimedia.com/contador-de-visitas.php?id=291311"></a><br><a href='http://www.websmultimedia.com/contador-de-visitas-gratis'></a><br><a href='http://www.websmultimedia.com/diseno-logotipos'></a>
<!-- Fin Contador de visitas -->
            <div class="form-group text-center">

                <a href="{{ route('libro.index') }}">
                    <img class="mb-3" src="{{ asset('img/logo.nobosa.png')}}" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="" width="40%">
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
 $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
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

        page = $(this).attr('href').split('page=')[1];;
        console.log('pagina: '+ page);
        var route = $('#paginationlink').attr('href');
        //var route = $(this).attr('href');
        console.log('ruta: ' + route);
        //alert(route);

        $.get(route,  function(result){
            //console.log(result);
            $('#pagination').html(result);
            //$('pagination').html(result);
        });

    });

    
     

</script>
@endsection
