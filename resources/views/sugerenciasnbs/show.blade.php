@extends('layouts.nbs.app')

@section('contenido')

    <div class="container" id="sugerenciasnbs">
        @include('sugerenciasnbs.aside.info')
        @include('sugerenciasnbs.aside.show')
        @include('sugerenciasnbs.aside.respuestasugerencias')
        <div class="row">
            <div class="col">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('respuestasugerencia.createBySugerencia_id', $sugerenciasnbs->id) }}" class="btn btn-primary">Responder</a>
                    <a href="{{ route('sugerenciasnbs.index') }}" class="btn btn-success index">Volver</a>
                </div>

            </div>
        </div>

    </div>

@endsection

@section('scriptlocal')
<script>
    $(document).on('click', '.pagination a', function(e) {
        event.preventDefault();

        page = $(this).attr('href').split('page=')[1];;
        console.log('pagina: '+ page);
        //var route = $('#paginationlink').attr('href');
        var route = $(this).attr('href');
        console.log(route);
        //alert(route);

        $.get(route,  function(result){
            $('#sugerenciasnbs').html(result);
        });
    });

    $(document).on('click', 'show', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        console.log(route);
        $.get(route,  function(result){
            $('#sugerenciasnbs').html(result);
        });
    });

    $(document).on('click', '.index', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        $.get(route,  function(result){
            $('#sugerenciasnbs').html(result);
        });

    });
</script>
@endsection

