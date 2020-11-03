@extends('layouts.concurso.app')

@section('contenido')
<div class="container">
    <h2 class="text-primary"></i>Concursando</h2>
    <button onclick="interval()">Interval</button>
    <button onclick="timeout()">Timeout</button>
    <div class="text-danger" id="testdiv">0/60</div>
    @include('concurso.aside.error')

    {!! Form::open([ 'route' => [ 'concurso.store' ]]) !!}
        <div class="row">
            <div class="col-md-6">
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

    $(document).on("click", ".btn-info", function() {
        event.preventDefault();
        $thiscard = $(this).parent().parent().parent();
        $thiscard.fadeOut('slow');
        console.log('siguiente');
        $thiscard.next().next().fadeIn(300);
        //alert($('#testdiv').text());
    });

</script>

@endsection


