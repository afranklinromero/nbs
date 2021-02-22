@extends('layouts.nbs.app')

@section('contenido')

    <div class="container" id="pregunta">

        @include('pregunta.aside.show')
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
            $('#pregunta').html(result);
        });
    });

    $(document).on('click', 'show', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        console.log(route);
        $.get(route,  function(result){
            $('#pregunta').html(result);
        });
    });

    $(document).on('click', '.index', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        $.get(route,  function(result){
            $('#pregunta').html(result);
        });

    });
</script>
@endsection

