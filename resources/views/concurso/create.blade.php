@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <p class="h4 text-success text-center"><i class="far fa-file"></i> CREAR NUEVO LIBRO</p>
    @include('libro.aside.error')

    {!! Form::open([ 'route' => [ 'libro.store' ], 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]) !!}
        <div class="row">
            <div class="col-md-6">
                @include('libro.aside.form')
            </div>
        </div>
    {!! Form::close() !!}
</div>


<script type="text/javascript">
    Dropzone.options.imageUpload = {
        headers: "Hola Mundo",
        maxFilesize         :       1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };

</script>



@endsection


