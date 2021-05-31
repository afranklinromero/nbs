@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12 p-3" style="display: flex; justify-content: center; align-items:center;">
            <div class="card" style="float: aut; width: 500px;" >
                <div class="card-body">
                    <h3>Ingreso</h3>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="row"></div>
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Número teléfono</label>

                            <div class="col-md-12">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p class="text-center float-right"><button type="submit" class="btn btn-success">Ingresar</button></p>
                                    

                                    <a href="{{ route('users.create') }}"><strong class="text-danger">Registrarme</strong></a></th>
    
                                    <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                        Me Olvide mi contraseña?
                                    </a>-->
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
