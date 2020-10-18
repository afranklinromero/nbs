@extends('layouts.app')

@section('contenido')


   
              
                    @if(Auth::user()->hasRole('admin'))
                    <div class="container">
                      <div>Acceso como administrador
                           <h4> Bienvenido admin.  </h4>
                           <p>
            <a href="{{ route('libro.create') }}" class="btn btn-primary"><i class="far fa-file"></i> Nuevo</a>
        </p>
                      </div>
                    </div>
                     
                    @else 
                    <div class="container">
                        <div>Acceso usuario
                            <h4> Bienvenido usuario.  </h4> <br>
                        </div>                             
                     </div>
                  
                    @endif

       
@endsection
