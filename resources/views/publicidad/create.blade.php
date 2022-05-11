@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    {!! Form::open(['route'=>'publicidad.store', 'id'=>'form-publicidad-create', 'enctype'=>"multipart/form-data"]) !!}
        <h3 style="color: #d86304" class="mb-3">
            Nueva publicidad
            <div class="float-right">
                <div class="btn-group" role="group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success store']) !!}
                    <a href="{{route('publicidad.index')}}#publicidades" class="btn btn-primary index">Cancelar</a>
                </div>
            </div>
        </h3>
        @include('publicidad.aside.form')
        <div class="text-right">
            <div class="btn-group" role="group">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success store']) !!}
                <a href="{{route('publicidad.index')}}#publicidades" class="btn btn-primary index">Cancelar</a>
            </div>
        </div>
    {!! Form::close() !!}
</div>

@endsection

@section('scriptlocal')
    <script>
        document.getElementById("imagenfile").onchange = function(e) {
            // Creamos el objeto de la clase FileReader
            let reader = new FileReader();

            // Leemos el archivo subido y se lo pasamos a nuestro fileReader
            reader.readAsDataURL(e.target.files[0]);

            // Le decimos que cuando este listo ejecute el código interno
            reader.onload = function(){
                let preview = document.getElementById('preview'),
                        image = document.createElement('img');

                image.src = reader.result;
                image.height = 180;
                image.src = reader.result;
                image.className = 'rounded';

                preview.innerHTML = '';
                preview.append(image);
            };
        }
    </script>
@endsection
