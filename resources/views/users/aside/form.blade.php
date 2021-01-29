<h3 class="rounded-sm p-3 mb-2  bg-success text-white">REGISTRO USUARIO</h3>
{!! Form::open() !!}
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('nombre', 'Nombres y Apellidos:', ['class' => 'text-success']) !!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono', 'Telefono referencia:', ['class' => 'text-success']) !!}
            {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion', 'Direccion:', ['class' => 'text-success']) !!}
            {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña:', ['class' => 'text-success']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'confirmar contraseña:', ['class' => 'text-success']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<a href="{{route('users.index')}}" class="btn btn-danger save">REGISTRAR</a>
<a href="{{route('users.index')}}" class="btn btn-primary index">VOLVER</a>
{!! Form::close() !!}

