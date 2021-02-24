<h3 class="rounded-sm p-3 mb-2  bg-success text-white">REGISTRO USUARIO</h3>
{!! Form::open(['route'=>'users.store']) !!}
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
                {!! Form::label('correo', 'Correo:', ['class' => 'text-success']) !!}
                {!! Form::text('correo', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('ocupacion', 'Ocupacion:', ['class' => 'text-success']) !!}
                {!! Form::
                text('ocupacion', null, ['class' => 'form-control']) !!}
                
            </div>
            <div class="form-group">
                {!! Form::label('direccion', 'Direccion:', ['class' => 'text-success']) !!}
                {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Contraseña:', ['class' => 'text-success']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            
        
        </div>
    </div>
{!! Form::submit('REGISTRAR',['step' => 'any','class'=>'btn btn-success']) !!}


<a href="{{route('users.store')}}" class="btn btn-danger save">REGISTRAR</a>
<a href="{{route('users.index')}}" class="btn btn-primary index">VOLVER</a>
{!! Form::close() !!}
