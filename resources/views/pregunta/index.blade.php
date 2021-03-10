@extends('layouts.nbs.app')

@section('contenido')

    <div class="container" id="pregunta-head">
        <h3>
            Preguntas para las olimpiadas de conocimiento
        </h3>
        @include('pregunta.aside.aside')
        <div class="container" id="pregunta-body">
            @include('pregunta.aside.index')
        </div>

    </div>

@endsection

@section('scriptlocal')
<script>

    $(document).on('click', '.pagination a', function(e) {
        event.preventDefault();
        console.log('pagination');
        page = $(this).attr('href').split('page=')[1];;
        console.log('pagina: '+ page);
        //var route = $('#paginationlink').attr('href');
        var frm = $('#frm-preguntas');
        action = frm.attr('action')+'?page='+page;
        console.log('formulario: ' +  action);

        $.get(action, frm.serialize(), function(result){
            $('#pregunta-body').html(result);
        });

    });
/*
    $(document).on('click', '.show', function(e) {
        event.preventDefault();
        console.log('show');
        //page = $(this).attr('href').split('page=')[1];;
        //console.log('pagina: '+ page);
        //var route = $('#paginationlink').attr('href');
        var route = $(this).attr('href');
        console.log(route);
        //alert(route);

        $.get(route,  function(result){
            $('#pregunta-body').html(result);
        });

    });
*/
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
