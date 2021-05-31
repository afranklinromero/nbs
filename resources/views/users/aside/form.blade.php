

        <div class="row">
            <div class="col-md-6 form-group">
                {!! Form::label('name', 'Nombres y Apellidos:', ['class' => 'text-default']) !!}
                {!! Form::text('name', isset($user)? $user->name:null, ['class' => 'form-control form-control-sm','required']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('email', 'email:', ['class' => 'text-default']) !!}
                {!! Form::email('email', isset($user)? $user->email:null, ['class' => 'form-control form-control-sm','required', 'minlength' => '8', 'maxlength' => '128']) !!}
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                {!! Form::label('direccion', 'Direccion:', ['class' => 'text-dark']) !!}
                {!! Form::text('direccion', isset($user)? $user->direccion:null, ['class' => 'form-control form-control-sm','required', 'minlength' => '5', 'maxlength' => '256']) !!}
            </div>
            <div class="col-md-6 form-group">
                {!! Form::label('ocupacion', 'Ocupacion:', ['class' => 'text-default']) !!}
                {!! Form::text('ocupacion', isset($user)? $user->ocupacion:null, ['class' => 'form-control form-control-sm','required', 'minlength' => '5', 'maxlength' => '128']) !!}
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
                {!! Form::text('telefono', isset($user)? $user->telefono:null, ['class' => 'form-control form-control-sm','required', 'minlength' => '8', 'maxlength' => '32']) !!}
            </div>
            <div class="col-md-4 form-group">
                {!! Form::label('password', 'Contraseña:', ['class' => 'text-default']) !!}
                {!! Form::password('password', ['class' => 'form-control form-control-sm','required']) !!}
            </div>
    
            <div class="col-md-4 form-group">
                {!! Form::label('password_confirmation', 'Confirmar contraseña:', ['class' => 'text-default']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control form-control-sm','required']) !!}
            </div>
        </div>
        
    



