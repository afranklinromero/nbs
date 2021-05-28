<h3 class="text-success">Crear cuenta nobosa</h3>
@include('users.aside.error')
{!! Form::open(['route'=>'users.store']) !!}
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6 form-group">
                {!! Form::label('name', 'Nombres y Apellidos:', ['class' => 'text-default']) !!}
                {!! Form::text('name', null, ['class' => 'form-control form-control-sm','required']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('email', 'email:', ['class' => 'text-default']) !!}
                {!! Form::email('email', null, ['class' => 'form-control form-control-sm','required', 'minlength' => '8', 'maxlength' => '128']) !!}
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                {!! Form::label('direccion', 'Direccion:', ['class' => 'text-dark']) !!}
                {!! Form::text('direccion', null, ['class' => 'form-control form-control-sm','required', 'minlength' => '5', 'maxlength' => '256']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('ocupacion', 'Ocupacion:', ['class' => 'text-default']) !!}
                {!! Form::text('ocupacion', null, ['class' => 'form-control form-control-sm','required', 'minlength' => '5', 'maxlength' => '128']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-dark">Datos para ingresar a nobosa</h4>
                <p>Estos seran necesarios para ingresar a nuestro sistema, y poder participar en nuestros concursos, y contenido.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                {!! Form::label('telefono', 'Telefono (Login):', ['class' => 'text-default']) !!}
                {!! Form::text('telefono', null, ['class' => 'form-control form-control-sm','required', 'minlength' => '8', 'maxlength' => '32']) !!}
            </div>
            <div class="col-md-4 form-group">
                {!! Form::label('password', 'Contraseña:', ['class' => 'text-default']) !!}
                {!! Form::password('password', ['class' => 'form-control form-control-sm','required']) !!}
            </div>
    
            <div class="col-md-4 form-group">
                {!! Form::label('confirmpassword', 'Confirmar contraseña:', ['class' => 'text-default']) !!}
                {!! Form::password('password', ['class' => 'form-control form-control-sm','required']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                {!! Form::submit('Registrar',['step' => 'any','class'=>'btn btn-success btn-sm']) !!}
                <a href="{{route('login')}}" class="btn btn-danger btn-sm index">Cancelar</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 text-center">
        <img class="img-fluid" width="300" src="{{asset('img/log-img.png')}}" alt="">
    </div>
</div>

{!! Form::close() !!}
