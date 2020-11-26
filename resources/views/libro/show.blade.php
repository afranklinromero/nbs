@extends('layouts.app-marcador')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-4 show-left">
                @include('libro.aside.show-left')
            </div>
            <div class="col-15 col-md-8 show-right">
                @include('libro.aside.show-right')
            </div>
        </div>
    </div>
@endsection

@section('scriptlocal')
<script>
    $(document).ready(function(){

        var height = $(window).height();

        $('#marcadores').height(height);
    });

    $(document).on( "click", ".go-to-page", function() {
        event.preventDefault();
        var $form = $(this).parent();
        $.get($form.attr('action'), $form.serialize(), function(result){
            $('.show-right').html(result);
        });
    });


    $(document).on( "click", ".page-link", function() {
        event.preventDefault();
        var route = $(this).attr('href');
        $.get(route, function(result){
            $('.show-left').html(result);
        });
    });
</script>
    
@endsection