@extends('layouts.nbs.app')

@section('contenido')
    @include('blog.aside.info')
    @include('blog.aside.error')
    <div class="container" id="blog-head">
        <div class="container" id="blog-body">

            @include('blog.aside.show')
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="btn-group" role="group">
                            <a href="{{ route('blog.index') }}" class="btn btn-success">Volver</a>
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

