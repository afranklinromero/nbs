@extends('layouts.concurso.app')

@section('contenido')
<div class="container">
    <h2 class="text-primary"></i>Concursando</h2>

    @include('concurso.aside.error')

    {!! Form::open([ 'route' => [ 'participacion.store' ], 'id'=>'frmjuego', '']) !!}
        <!--<div class="text-danger" id="testdiv">00:00</div>-->
        <div class="progress">
            <div id="progress" class="progress-bar progress-bar-striped progress-bar-animated bg-default" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%">00:00</div>
        </div>
        {!! Form::hidden('tiempo', '0', ['id' => 'tiempo']) !!}
        {!! Form::hidden('concurso_id', $temaconcurso->concurso->id) !!}
        {!! Form::hidden('tema_id', $temaconcurso->tema->id) !!}
        @for ($i = 0; $i < $n; $i++)
            {!! Form::hidden('preguntas[]', '0', ['id' => 'pregunta'.$i]) !!}
            {!! Form::hidden('respuestas[]', '0', ['id' => 'respuesta'.$i]) !!}
        @endfor

        @php
            //$pregunta = $preguntas->first();
        @endphp

        <div id="pregunta">
            @include('concurso.aside.siguientepregunta')
        </div>

        <br>

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
        if (t<=60  && enjuego){
            //document.getElementById("testdiv").innerHTML= Math.floor(t/60).toString() + ':' + (t%60).toString();
            min = Math.floor(t/60);
            sec = (t%60);
            smin = min.toString();
            ssec = sec.toString();
            if (min<10){ smin = '0'+smin}
            if (sec<10){ ssec = '0'+ssec}
            document.getElementById("progress").innerHTML=  smin + ':' + ssec;
            $('#progress').attr('style',  'width: '+(t*100/n).toString() + '%')
            t++;
        } else {
            if (t>=60){
                terminarjuego();
            }
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

    function terminarjuego(){
        enjuego = false;
        $('#tiempo').val(t-1);
        formjuego = $('#frmjuego');
        console.log(formjuego);
        $.post(frmjuego.action, formjuego.serialize(), function(result){
            $('#pregunta').html(result);
        });
    }

    function siguientepregunta(index, preguntaanterior_id, ruta_respuesta){
        $route = $('#siguientepregunta').attr('href');
        console.log('ruta siguiente preguta: '+$route);
        
        $("input[name='preguntas[]']").map( function(key){
            if (key == (index-1)){
                $(this).val($('#pregunta_id').val());
                console.log('pregunta_id: ' + $('#pregunta_id').val());
            }
        });

        $("input[name='respuestas[]']").map( function(key){
            if (key == (index-1)){
                var respuesta_id = ruta_respuesta.split("/")[5];
                $(this).val(respuesta_id);
                console.log('respuesta_id: ' + respuesta_id);
            }
        });

        //$('#pregunta').fadeIn(1000).html('<div class="loading"><img src="http://127.0.0.1:8000/img/loader.gif"/><br/>Un momento, por favor...</div>');

        $.get($route, function(result){

            console.log('boton siguiente!!');
            if (result == 'endgame'){
                console.log('terminaodo juego');
                terminarjuego();
                //$('#pregunta').html(result);
            } else {
                $('#pregunta').fadeOut(500, function(){
                    $('#pregunta').fadeIn(300).html(result);
                });
            }
        });
    }
    

    $(document).on("click", ".responder", function() {
        event.preventDefault();

        var ruta_respuesta = this.href;   
        console.log('ruta respuesta: '+ruta_respuesta);
        var elemento = this; 
        $(this).removeClass('btn-outline-primary');
        //$(this).addClass('btn-warning');
        var correcto = 0;
        $.get(ruta_respuesta, function(result){
            if (result == 1){
                console.log('success');
                //alert('correcto');
                correcto = 1;
                $(elemento).addClass('btn-success');
            } else {
                console.log('danger');
                //alert('incorrecto');
                correcto = 0;
                $(elemento).addClass('btn-danger');
            }
                
        });

        var index = $('#index').text();

        siguientepregunta(index,  $('#pregunta_id').val(), ruta_respuesta);
    });

    $(document).on("click", ".jugar", function() {
        event.preventDefault();
        $route = this.href;
        console.log(route);
        var index = $('#index').text();
        $("input[name='preguntas[]']").map( function(key){
            if (key == (index-1))
                $(this).val($('#pregunta_id').val());
        });

        $("input[name='respuestas[]']").map( function(key){
            if (key == (index-1))
                $(this).val($route.split("/")[6]);
        });

        //$('#pregunta').fadeIn(1000).html('<div class="loading"><img src="http://127.0.0.1:8000/img/loader.gif"/><br/>Un momento, por favor...</div>');

        $.get($route, function(result){

            console.log('boton siguiente!!');
            if (result == 'endgame'){
                console.log('terminaodo juego');
                terminarjuego();
                //$('#pregunta').html(result);
            } else {
                $('#pregunta').fadeOut(500, function(){
                    $('#pregunta').fadeIn(300).html(result);
                });
            }
        });
        return false;
    });

    
</script>

@endsection


