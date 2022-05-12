@extends('layouts.nbs.app')

@section('contenido')

    <div class="container" id="sugerencia">

        @include('sugerencia.aside.index')
    </div>

@endsection

@section('scriptlocal')
<script>
    /*
    $(document).on('click', '.pagination a', function(e) {
        event.preventDefault();

        page = $(this).attr('href').split('page=')[1];;
        console.log('pagina: '+ page);
        //var route = $('#paginationlink').attr('href');
        var route = $(this).attr('href');
        console.log(route);
        //alert(route);

        $.get(route,  function(result){
            $('#sugerencia').html(result);
        });

    });

    $(document).on('click', '.show', function(e) {
        event.preventDefault();

        //page = $(this).attr('href').split('page=')[1];;
        //console.log('pagina: '+ page);
        //var route = $('#paginationlink').attr('href');
        var route = $(this).attr('href');
        console.log(route);
        //alert(route);

        $.get(route,  function(result){
            $('#sugerencia').html(result);
        });

    });

    $(document).on('click', '.index', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        console.log(route);
        $.get(route,  function(result){
            $('#sugerencia').html(result);
        });

    });
/*
    $(document).on('click', '.create', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        console.log(route);
        $.get(route,  function(result){
            $('#sugerencia').html(result);
        });

    });

    $(document).on('click', '.store', function(e) {
        event.preventDefault();
        var form = $(this).parent().parent();
        console.log(form.attr('action'));

        $.post(form.action, form.serialize(), function(result){
            $('#sugerencia').html(result);
        }).done(function(){

        }).fail(function(request){
            $('#sugerencia').html(request);
        }).always(function(){

        });

    });

    $(document).on('click', '.update', function(e) {
        event.preventDefault();
        var form = $(this).parent().parent();
        console.log('ruta update:' + form.attr('action'));
/*
        $.post(form.action, form.serialize(), function(result){
            $('#sugerencia').html(result);
        });

    });
    */
</script>
@endsection
