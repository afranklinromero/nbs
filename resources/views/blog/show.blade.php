@extends('layouts.nbs.app')

@section('contenido')

    <div class="container" id="blog-head">
        <div class="container" id="blog-body">
        <h3 class="text-success text-uppercase"> {{ $blog->titulo }}</h3>
            @include('blog.aside.show')
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-end">
                        <div class="btn-group" role="group">
                            <a href="{{ route('blog.index') }}" class="btn btn-success">Volver</a>
                            <a href="{{ route('blog.create') }}" class="btn btn-primary">Nuevo</a>
                        </div>
                    </div>
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
            $('#blog').html(result);
        });
    });

    $(document).on('click', 'show', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        console.log(route);
        $.get(route,  function(result){
            $('#blog').html(result);
        });
    });

    $(document).on('click', '.index', function(e) {
        event.preventDefault();
        var route = $(this).attr('href');
        $.get(route,  function(result){
            $('#blog').html(result);
        });

    });
</script>
@endsection

