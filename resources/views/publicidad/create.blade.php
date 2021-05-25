@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h3 style="color: #d86304">Nueva publicidad</h3>
    {!! Form::open(['route'=>'publicidad.store', 'id'=>'form-publicidad-create', 'enctype'=>"multipart/form-data"]) !!}
        @include('publicidad.aside.form')
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}
        <a href="{{route('concurso.index')}}#publicidades" class="btn btn-success index">Volver</a>

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
            let preview = document.getElementById('preview'),
                    image = document.createElement('img');

            image.src = reader.result;
            image.className = 'img-fluid rounded';

            preview.innerHTML = '';
            preview.append(image);
        };
        }
    </script>
@endsection
