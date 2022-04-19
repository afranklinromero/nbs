@extends('layouts.nbs.app')

@section('css')
<style>
.videowrapper {
    float: none;
    clear: both;
    width: 100%;
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
}

.videowrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 150px;
}

</style>

@endsection

@section('contenido')


<div class="container">
    <p class="h3 fw-bold"><strong>Tutoriales</strong></p>
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="videowrapper">
                <iframe src="https://www.youtube.com/embed/wDC66B2MSJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="h6"><strong> 1. Como utilizar el buscador</strong></p>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="videowrapper">
                <iframe src="https://www.youtube.com/embed/wDC66B2MSJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="h6"><strong> 2. Como utilizar las herramientas pdf</strong></p>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="videowrapper">
                <iframe src="https://www.youtube.com/embed/wDC66B2MSJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="h6"><strong>3. Como participar de las olimpiadas</strong></p>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="videowrapper">
                <iframe src="https://www.youtube.com/embed/wDC66B2MSJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="h6"><strong>4. Administrador</strong></p>
        </div>
    </div>

    <hr>

    <p class="h3 fw-bold"><strong>Tutoriales para administrador</strong></p>
    <div class="row">
        <div class="col-md-3">
            <div class="videowrapper">
                <iframe src="https://www.youtube.com/embed/wDC66B2MSJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="h6"><strong> 1. Administrar Blogs</strong></p>
        </div>
        <div class="col-md-3">
            <div class="videowrapper">
                <iframe src="https://www.youtube.com/embed/wDC66B2MSJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="h6"><strong> 2. Administrar publicidad</strong></p>
        </div>
        <div class="col-md-3">
            <div class="videowrapper">
                <iframe src="https://www.youtube.com/embed/wDC66B2MSJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="h6"><strong>3. Administrar Olimpiadas</strong></p>
        </div>
        <div class="col-md-3">
            <div class="videowrapper">
                <iframe src="https://www.youtube.com/embed/wDC66B2MSJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="h6"><strong>4. Administrar sugerencias</strong></p>
        </div>
    </div>
</div>

@endsection
