<h3 class="rounded-sm p-3 mb-2  bg-success text-white">REGISTRO USUARIO</h3>
@include('users.aside.error')
{!! Form::open(['route'=>'users.store']) !!}
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('name', 'Nombres y Apellidos:', ['class' => 'text-success']) !!}
                {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('telefono', 'Telefono referencia:', ['class' => 'text-success']) !!}
                {!! Form::text('telefono', null, ['class' => 'form-control','required', 'minlength' => '8', 'maxlength' => '32']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('direccion', 'Direccion:', ['class' => 'text-success']) !!}
                {!! Form::text('direccion', null, ['class' => 'form-control','required', 'minlength' => '5', 'maxlength' => '256']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('ocupacion', 'Ocupacion:', ['class' => 'text-success']) !!}
                {!! Form::
                text('ocupacion', null, ['class' => 'form-control','required', 'minlength' => '5', 'maxlength' => '128']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('email', 'Correo:', ['class' => 'text-success']) !!}
                {!! Form::email('email', null, ['class' => 'form-control','required', 'minlength' => '8', 'maxlength' => '128']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Contraseña:', ['class' => 'text-success']) !!}
                {!! Form::password('password', ['class' => 'form-control','required']) !!}
            </div>


        </div>
    </div>
{!! Form::submit('REGISTRAR',['step' => 'any','class'=>'btn btn-success']) !!}



<a href="{{route('login')}}" class="btn btn-primary index">VOLVER</a>
{!! Form::close() !!}
