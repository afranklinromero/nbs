@extends('layouts.nbs.app')

@section('contenido')
<div class="container">

    <h1 id="topolimpiada" class="text-primary">OLIMPIADAS DE CONOCIMIENTO</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/img2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Olimpiadas de Conocimiento en Normas de Salud</h5>
                  <p class="card-text">Participa de esta olimpiada, respondiendo 10 preguntas en un determinado tiempo, mientras mas participes tendras mas oportunidad de ganar</p>
                  <a href="#olimpiadas" class="btn btn-outline-success">Ingresar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/img1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ver la clasificacion</h5> <br>
                  <p class="card-text">Mira la clasificación en linea, y ve en que lugar estas, tus puntos son acumulativos, mientras mas participes tendras mas oportunidades de ganar.</p>
                    <a href="#clasificacion" class="btn btn-outline-success">Ingresar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 shadow">
                <img src="{{ asset('img/preguntas.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Preguntas</h5><br>
                  <p class="card-text">Puedes sugerir algunas preguntas para las olimpiadas, tu pregunta será evaluada por nuestro equipo, y se mostrará con tu nombre en la olimpiada.</p>
                  <a href="{{route('pregunta.create')}}" class="btn btn-outline-success">Registrar</a>
                  <a href="#preguntas" class="btn btn-outline-success">Ver mis preguntas</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @include('publicidad.aside.carrousel')
        </div>
        <div class="col-md-3"></div>
    </div>
    <hr>
    <div class="container" id="concurso-body">
        @include('concurso.aside.index')
    </div>

    <div id="temaconcurso"> @include('concurso.index.concurso') </div> <hr>

    <div id='pregunta'> @include('concurso.index.pregunta') </div> <hr>

    <div id='clasificacion'> @include('concurso.index.clasificacion') </div> <hr>

</div>
@endsection

@section('scriptlocal')
<script>
    $(document).on('click', '.page-link', function(e) {
        event.preventDefault();
        var href = $(this).attr('href');

        if (href.indexOf('temaconcurso') > 0){
            var frm = $('#frm-concursos');
            $.get(href, frm.serialize(), function(result){
                $('#temaconcurso').html(result);
            });
        }

        if (href.indexOf('pregunta') > 0){
            var frm = $('#frm-preguntas');
            $.get(href, frm.serialize(), function(result){
                $('#pregunta').html(result);
            });
        }
    });

    $(document).on('change', '#preguntaEstado', function(e) {
        //event.preventDefault();
        if (this.checked){
            //href = $(this).parent()
            var frm = $('#frm-preguntas');
            $.get(frm.attr('action'), frm.serialize(), function(result){
                $('#pregunta').html(result);
            });
        }


    });

    $(document).on('change', '#concursoEstado', function(e) {
        //event.preventDefault();
        if (this.checked){
            var frm = $('#frm-concursos');
            $.get(frm.attr('action'), frm.serialize(), function(result){
                $('#temaconcurso').html(result);
            });
        }
    });

    $(document).on('click', '.btn-update', function(e) {
        event.preventDefault();
        var frm = $(this).parent();
        console.log(frm.attr('action'));
        var pag = $('#pagRespuesta').val();

        var preguntaPage = $('#preguntaPage');
        console.log('preguntaPage:' + preguntaPage.attr('href'));
        $.post(frm.attr('action'), frm.serialize(), function(result){
            //console.log(result);
            $('#pregunta').html(result);
        });

        $(this).parent().parent().parent().parent().parent().parent().parent().parent().modal('hide');
        //$(0·modal).show();
    });


</script>
@endsection
