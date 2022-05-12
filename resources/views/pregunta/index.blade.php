@extends('layouts.nbs.app')

@section('contenido')

    <div class="container" id="pregunta-head">
        <h3>
            Preguntas para las olimpiadas de conocimiento
        </h3>
        @include('pregunta.aside.aside')
        <div id="pregunta-body">
            @include('pregunta.aside.index')
        </div>

    </div>

@endsection

@section('scriptlocal')
<script>

    $(document).on('click', '.page-link', function(e) {
        event.preventDefault();
        var href = $(this).attr('href');
        var frm = $('#frm-preguntas');
        $.get(href, frm.serialize(), function(result){
            //console.log(result);
            $('#pregunta-body').html(result);
        });

    });

    $(document).on('change', '.index', function(e) {
        event.preventDefault();

        console.log('index');
        var form = $(this).parent().parent();
        //alert(form.attr('action'));
        $.get(form.attr('action'), form.serialize(),  function(result){
            $('#pregunta-body').html(result);
        });

    });

    $(document).on('click', '.createx', function(e) {
        event.preventDefault();

        var route = $(this).attr('href');
        console.log(route);
        $.get(route,  function(result){
            $('#pregunta-body').html(result);
        });

    });

    $(document).on('click', '.store', function(e) {
        event.preventDefault();
        console.log('click store');
        var form = $(this).parent();
        console.log(form.attr('action'));

        $.post(form.action, form.serialize(), function(result){
            $('#pregunta-body').html(result);
        });

    });

    $(document).on('click', '.update', function(e) {
        event.preventDefault();
        var form = $(this).parent().parent();
        console.log('ruta update:' + form.attr('action'));
/*
        $.post(form.action, form.serialize(), function(result){
            $('#pregunta').html(result);
        });
*/
    });
</script>
@endsection
