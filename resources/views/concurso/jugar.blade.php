@extends('layouts.concurso.app')

@section('contenido')
<div class="container">
    <h2 class="text-primary"></i>Concursando</h2>
    
    @include('concurso.aside.error')

    {!! Form::open([ 'route' => [ 'participacion.store' ], 'id'=>'frmjuego', '']) !!}
                @include('concurso.aside.form')
        
        
    {!! Form::close() !!}
</div>

@endsection

@section('scriptlocal')
<script type="text/javascript">
    window.onload = iniciarCronometro();
    var t;
    var i = 1;
    var n = 60;
    var enjuego = true;
    var timer;

    function proceso(){
        if (t<60  && enjuego){
            document.getElementById("testdiv").innerHTML=  t + '/60';
            t++;
        } else {
            terminarjuego();
            finalizarCronometro(timer);
        }
    }
    function iniciarCronometro(){
        t=1;
        timer = setInterval(proceso,1000,"JavaScript");
    }

    function finalizarCronometro(){
        clearInterval(timer);
    }

    function timeout(){
        setTimeout(function(){
            document.getElementById("testdiv").innerHTML="Pasaron 2 segundos antes de que pudieras ver esto.";
        },2000,"JavaScript");
    }
/*
    function siguiente(){
        event.preventDefault();
        if (i<=10){
        }
        i++;
    }
*/
    function terminarjuego(){
        enjuego = false;
        $('#tiempo').val(t-1);
        formjuego = $('#frmjuego');
        console.log(formjuego);
        $.post(frmjuego.action, formjuego.serialize(), function(result){
            $('#pregunta').html(result);    
        });
    }

    $(document).on("click", ".btn-success", function() {
        event.preventDefault();
        $route = this.href;
        var index = $('#index').text();
        $("input[name='preguntas[]']").map( function(key){
            if (key == (index-1))
                $(this).val($('#pregunta_id').text());
        });

        $("input[name='respuestas[]']").map( function(key){
            if (key == (index-1))
                $(this).val($route.split("/")[6]);
        });

        $.get($route, function(result){
            console.log('boton siguiente!!');
            if (result == 'endgame'){
                terminarjuego();
                //$('#pregunta').html(result);
            } else {
                $('#pregunta').html(result);
            }
        });
    });
</script>

@endsection


