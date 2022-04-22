@extends('layouts.nbs.app')

@section('contenido')
<div class="container">

    {!! Form::open(['route'=>'blog.store', 'id'=>'form-blog-create', 'enctype'=>"multipart/form-data"]) !!}

        <h3 class="text-success mb-3">
            Nuevo artitulo
            <div class="float-right">
                <div class="btn-group" role="group">
                    <a href="{{route('blog.index')}}" class="btn btn-success index">Cancelar</a>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}
                </div>
            </div>
        </h3>


        @include('blog.aside.form')
        <br>
        <div class="text-right">
            <div class="btn-group" role="group">
                <a href="{{route('blog.index')}}" class="btn btn-success index">Cancelar</a>
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary store']) !!}

            </div>
        </div>

    {!! Form::close() !!}
</div>

@endsection

@section('scriptlocal')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.3.200/pdf.min.js" integrity="sha512-YP2ayDGlp2agSpcEeqEbVBwpU1OjNVKk3teB/J5j0947d5wstmhirMUxHFQCh7Y7HwqZCAoqBEHlltvGReweTQ==" crossorigin="anonymous"></script>
    <script>
        document.getElementById("imagen").onchange = function(e) {
            // Creamos el objeto de la clase FileReader
            let reader = new FileReader();

            // Leemos el archivo subido y se lo pasamos a nuestro fileReader
            reader.readAsDataURL(e.target.files[0]);

            // Le decimos que cuando este listo ejecute el código interno
            reader.onload = function(){
                let preview = document.getElementById('preview'),
                        image = document.createElement('img');

                image.width = 100;
                image.src = reader.result;
                image.className = 'img-fluid rounded';

                preview.innerHTML = '';
                preview.append(image);
            };
        }

        document.querySelector("#documentopdf").addEventListener("change", function(e){
            var canvasElement = document.querySelector("canvas")
            var file = e.target.files[0]
            if(file.type != "application/pdf"){
                console.error(file.name, "is not a pdf file.")
                return
            }

            var fileReader = new FileReader();

            fileReader.onload = function() {
                var typedarray = new Uint8Array(this.result);

                pdfjsLib.getDocument(typedarray).then(function(pdf) {
                    // you can now use *pdf* here
                    console.log("the pdf has ",pdf.numPages, "page(s).")
                    pdf.getPage(pdf.numPages).then(function(page) {
                        // you can now use *page* here
                        var viewport = page.getViewport(0.5);
                        var canvas = document.querySelector("canvas")
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;


                        page.render({
                            canvasContext: canvas.getContext('2d'),
                            viewport: viewport
                        });
                    });

                });
            };

            fileReader.readAsArrayBuffer(file);
        })
    </script>
@endsection
