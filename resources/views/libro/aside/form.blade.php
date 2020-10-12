

<div class="form-group">
    {!! Form::label('nombre','Descripcion tipo producto') !!}
    {!! Form::text('nombre',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar',['step' => 'any','class'=>'btn btn-success']) !!}
    <a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fas fa-arrow-left">  </i> Volver</a>

</div>
