
<!--<h3><strong class="text-lowercase">Titulo › {{ $libro->titulo }}</strong></h3>-->
<div class="row">
    <div class="col-sm-6 col-md-12 text-center">
        <img class="rounded img-thumbnail" src="{{ asset('tapas/')}}/{{ $libro->tapa }}" alt="Libro" srcset="" width="100">
    </div>
    <div class="col-sm-6 col-md-12">
        <strong class="text-lowercase">titulo › </strong> {{ $libro->titulo }} <br>
        <strong class="text-lowercase">numero publicación › </strong>{{ $libro->lugarpublicacion }} <br>
        <a href="{{ route('libro.download', $libro->id) }}" class="btn btn-success btn-sm">descargar</a>
    </div>
</div>
<hr>
<!--
<div class="row">
    <div class="col-md-12">
        <form class="form-buscar" id="frm-buscar" action="{{route('libro.show', $libro->id) }}" method="GET" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group col-md-12 text-center">
                    {!! Form::hidden('libro_id', $libro->id) !!}
                    {!! Form::text('nombre',null,['class'=>'form-control caja nombre-libro','placeholder'=>' &#x1F50D; ', 'id' => 'nombre-libro'])!!}
            </div>
        </form>
        <br>
    </div>
</div>
-->
