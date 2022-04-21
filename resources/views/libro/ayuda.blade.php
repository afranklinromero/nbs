@extends('layouts.nbs.app')

@section('contenido')

<div class="container">
    <p class="h3 text-center">Bienvenido a la ayuda</p>
    <p class="fs-6 text-center text-secondary">aqui podras obtener ayuda sobre como usar nuestro buscador.</p>
    <p class="h3 fw-bold">Videos de ayuda</p>
    <div class="row">
        <div class="col-md-4">
            <a href="https://share.vidyard.com/watch/vCncxCeFgFxyu22aG4zU52?" target="_blank">
                <img src="{{ asset('img/ayuda/buscador/1.png') }}" class="img-fluid img-thumbnail" alt="...">
            </a>
            <p class="fw-bold fs-6 mt-3">Como utilizar el buscador de normas bolivianas de salud.</p>
        </div>
        <div class="col-md-4">
            <a href="https://share.vidyard.com/watch/vCncxCeFgFxyu22aG4zU52?" target="_blank">
                <img src="{{ asset('img/ayuda/buscador/2.png') }}" class="img-fluid img-thumbnail" alt="...">
            </a>
            <p class="fw-bold fs-6 mt-3">Como utilizar buscar dentro de un documento pdf.</p>
        </div>
    </div>
    <p class="fs-5 text-secondary mt-3">Para enviarnos tus sugerencias has click  <a class="link-success" href="{{ route('sugerenciasnbs.create') }}">aquí</a></p>

</div>
@endsection
