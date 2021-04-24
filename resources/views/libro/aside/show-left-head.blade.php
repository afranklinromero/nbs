
<!--<h3><strong class="text-lowercase">Titulo › {{ $libro->titulo }}</strong></h3>-->
<div class="row">
    <div class="col-sm-6 col-md-12 text-center">
        <img class="rounded img-thumbnail" src="{{ asset('tapas/')}}/{{ $libro->tapa }}" alt="Libro" srcset="" width="100">
    </div>
    <div class="col-sm-6 col-md-12">
        <strong class="text-lowercase">titulo › </strong> {{ $libro->titulo }} <br>
        <strong class="text-lowercase">numero publicación › </strong>{{ $libro->lugarpublicacion }} <br>
        <a href="{{ route('libro.download', $libro->id) }}" class="btn btn-success btn-sm">descargar</a>
        {!! Form::hidden('documentopdf', $libro->documentopdf, ['id'=>'documentopdf']) !!}
    </div>
</div>
<hr>
