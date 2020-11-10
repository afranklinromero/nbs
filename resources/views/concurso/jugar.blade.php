@extends('layouts.concurso.app')

@section('contenido')
<div class="container">
    <h2 class="text-primary"></i>Concursando</h2>
    <div class="text-danger" id="testdiv">0/60</div>
    @include('concurso.aside.error')

    {!! Form::open([ 'route' => [ 'participacion.store' ], 'id'=>'frmjuego', '']) !!}
        <div class="row">
            <div class="col-md-12">
                @include('concurso.aside.form')
            </div>
        </div>
    {!! Form::close() !!}
</div>

@endsection

@section('scriptlocal')
<script type="text/javascript">
    window.onload = interval();
    var t;
    var i = 1;
    var n = 60;
    function interval(){
        t=1;
        setInterval(function(){
            if (t<=60){
                document.getElementById("testdiv").innerHTML=  t + '/60';
                t++;
            } else {
                return;
            }
        },1000,"JavaScript");
    }
    function timeout(){
        setTimeout(function(){
            document.getElementById("testdiv").innerHTML="Pasaron 2 segundos antes de que pudieras ver esto.";
        },2000,"JavaScript");
    }

    function siguiente(){
        event.preventDefault();
        if (i<=10){
        }
        i++;
    }

    $(document).on("click", ".btn-success", function() {
        event.preventDefault();
        $route = this.href;
        //alert($route)
        /*$thiscard.fadeOut('slow', function(){
            $thiscard.next().next().fadeIn(300);
        });*/
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
            if (result == 'endgame'){
                formjuego = $('#frmjuego');
                console.log(formjuego);
                $.post(frmjuego.action, formjuego.serialize(), function(result){

                });
                console.log(frmjuego.action);
                $('#pregunta').html(result);
            } else {
                $('#pregunta').html(result);
            }


        });

        //alert($('#testdiv').text());
    });

</script>

@endsection


