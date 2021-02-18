@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>ENVIAR COMENTARIO</h3>
    <form action="{{route ('libro.enviarcorreo') }}" method="GET" class="d-inline">
        {{ csrf_field() }}
        {!! Form::text('Nombre', null, ['class' => 'form-group']) !!}
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}

    </form>
</div>

@endsection
