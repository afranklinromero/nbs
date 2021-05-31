@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    @include('users.aside.lista')
</div>

@endsection

@section('scriptlocal')
<script>
    /*
    $(document).on("click", ".pagination a", function() {
        event.preventDefault();
        var route = $(this).attr('href');
        $.get(route, function(result){
            //alert(result);
            $('.container').html(result);
        });
        return false;
    });

    $(document).on("click", ".index", function() {
        event.preventDefault();

        var route = $(this).attr('href');
        console.log(route);
        $.get(route, function(result){
            //alert(result);
            $('.container').html(result);
        });
        return false;

    });

    $(document).on("click", ".show", function() {
        event.preventDefault();

        var route = $(this).attr('href');
        console.log(route);
        $.get(route, function(result){
            //alert(result);
            $('.container').html(result);
        });
        return false;

    });

    $(document).on("click", ".edit", function() {
        event.preventDefault();

        var route = $(this).attr('href');
        console.log(route);
        $.get(route, function(result){
            //alert(result);
            $('.container').html(result);
        });
        return false;

    });
    */
 </script>

@endsection
