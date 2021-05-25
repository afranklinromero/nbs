@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3>Editar articulo</h3>
    {!! Form::open(['route'=>['publicidad.update', $publicidad->id], 'id'=>'form-publicidad-create', 'enctype'=>"multipart/form-data"]) !!}
        @method('PUT')
        @include('publicidad.aside.form')
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}
    <a href="{{route('publicidad.index')}}" class="btn btn-success index">Volver</a>

    {!! Form::close() !!}
</div>

@endsection

@section('scriptlocal')
    <script>
        document.getElementById("multimedia").onchange = function(e) {
            // Creamos el objeto de la clase FileReader
            let reader = new FileReader();

            // Leemos el archivo subido y se lo pasamos a nuestro fileReader
            reader.readAsDataURL(e.target.files[0]);

            // Le decimos que cuando este listo ejecute el código interno
            reader.onload = function(){
                let preview = document.getElementById('preview');
                let image = document.createElement('img');

                image.src = reader.result;
                image.className = 'img-fluid rounded';

                preview.innerHTML = '';
                preview.append(image);
            };
        }
    </script>
@endsection
