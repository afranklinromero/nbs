@extends('layouts.app-marcador')

@section('contenido')
    <div class="container">
        <div class="row show">
            <div class="col-md-4 show-left">
                @include('libro.aside.show-left')
            </div>
            <div class="col-md-8 show-right tam">
                @include('libro.aside.show-right')
            </div>
        </div>
    </div>
@endsection

@section('scriptlocal')
<script>
    /*
    $(document).ready(function(){
        var height = $(window).height();
        $('#left-body').height(height/2);
        var $form = $('#frmirapagina1');
        cargarPagina($form);
    });
    */

    $(document).on( "click", ".go-to-page", function() {
        event.preventDefault();
        var $form = $(this).parent();
        cargarPagina($form);
    });

    function cargarPagina($form){
        $.get($form.attr('action'), $form.serialize(), function(result){
            $('.show-right').html(result);
        });
    }

    $(document).on( "click", ".page-link", function() {
        event.preventDefault();
        var frm = $('#frm-buscar');
        var href = $(this).attr('href');
        
        if (href != null){
            var page = href.split('page=')[1];
            console.log(page);
            $.get(frm.attr('action') + '?page=' + page, frm.serialize(), function(result){
                $('.show-left-body').html(result);
            });
        } else {
            console.log('href undefined');
        }
    });

    $(document).on('keypress', '.nombre-libro', function(e) {
        if(e.which == 13) {
            event.preventDefault();
            var form = $(this).parent().parent();
            console.log(form.attr('action'));
            
            $.get(form.attr('action'), form.serialize(), function(result){
                $('.show-left-body').html(result);
            });
        }
    });

    $(document).on('keypress', '.titulo', function(e) {
        if(e.which == 13) {
            event.preventDefault();
            var form = $(this).parent().parent();
            console.log(form.attr('action'));
            
            $.get(form.attr('action'), form.serialize(), function(result){
                console.log(result);
                $('.show').html(result);
            });
            
        }
    });
</script>
    
@endsection