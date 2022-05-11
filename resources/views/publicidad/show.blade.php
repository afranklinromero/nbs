@extends('layouts.nbs.app')

@section('contenido')

    <div class="container" id="publicidad-head">
        <div class="container" id="publicidad-body">
            <h3 style="color: #d86304">
                Titulo: {{$publicidad->titulo}}
                @include('publicidad.aside.show-buttons')
            </h3>
            @include('publicidad.aside.show')
            <div class="row">
                <div class="col">
                    @include('publicidad.aside.show-buttons')
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
            $('#publicidad').html(result);
        });
    });

    $(document).on('click', 'show', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        console.log(route);
        $.get(route,  function(result){
            $('#publicidad').html(result);
        });
    });

    $(document).on('click', '.index', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        $.get(route,  function(result){
            $('#publicidad').html(result);
        });

    });
</script>
@endsection

