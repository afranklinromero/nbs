

<div class="form-group">
    {!! Form::label('titulo','Titulo') !!}
    {!! Form::text('titulo',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('fecha','Fecha') !!}
    {!! Form::date('fecha',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('tapa','Tapa') !!}
    {!! Form::file('tapa', ['class'=>'form-control']) !!}
</div>

<div id="myId">

</div>


<div class="form-group">
    {!! Form::label('documentopdf','Documento PDF') !!}
    {!! Form::text('documentopdf',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('edicion','Edicion') !!}
    {!! Form::text('edicion',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('serie','Serie') !!}
    {!! Form::text('serie',null,['class'=>'form-control'])!!}
</div>



<div class="form-group">
    {!! Form::label('nropublicacion','Numero publicación') !!}
    {!! Form::number('nropublicacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar',['step' => 'any','class'=>'btn btn-success']) !!}
    <a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fas fa-arrow-left">  </i> Volver</a>
</div>
