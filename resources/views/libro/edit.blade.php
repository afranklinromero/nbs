@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    {!! Form::open([ 'route' => [ 'libro.update', $libro->id ], 'method'=>'PUT', 'files' => true, 'enctype' => 'multipart/form-data', 'id' => 'image-upload' ]) !!}
        <h3 class="text-success mb-3">
            Editar libro
            <div class="float-right">
                <div class="btn-group" role="group">
                    {!! Form::submit('Guardar',['step' => 'any','class'=>'btn btn-success']) !!}
                    <a href="{{ route('libro.show', $libro->id) }}" class="btn btn-success"></i>Cancelar</a>
                </div>
            </div>
        </h3>
        @include('libro.aside.form')
        <div class="text-right">
            <div class="btn-group mt-3" role="group">
                {!! Form::submit('Guardar',['step' => 'any','class'=>'btn btn-success']) !!}
                <a href="{{ route('libro.index') }}" class="btn btn-success"></i>Cancelar</a>
            </div>
        </div>
        include
    {!! Form::close() !!}
</div>


@endsection

@section('scriptlocal')

<script type="text/javascript">
    Dropzone.options.imageUpload = {
        headers: "Hola Mundo",
        maxFilesize         :       1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.3.200/pdf.min.js" integrity="sha512-YP2ayDGlp2agSpcEeqEbVBwpU1OjNVKk3teB/J5j0947d5wstmhirMUxHFQCh7Y7HwqZCAoqBEHlltvGReweTQ==" crossorigin="anonymous"></script>
    <script>
        document.getElementById("tapa").onchange = function(e) {
            console.log('cambiando tapa...');
            // Creamos el objeto de la clase FileReader
            let reader = new FileReader();

            // Leemos el archivo subido y se lo pasamos a nuestro fileReader
            reader.readAsDataURL(e.target.files[0]);

            // Le decimos que cuando este listo ejecute el código interno
            reader.onload = function(){
                let preview = document.getElementById('preview'),
                        image = document.createElement('img');

                image.src = reader.result;
                image.className = 'img-fluid rounded img-thumbnail pl-5';

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
