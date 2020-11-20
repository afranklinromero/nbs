<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dropzone.css') }}">
    
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('index') }}">NBS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
                @if( Auth::check())
                     @if(Auth::user()->hasRole('admin'))
                     <li class="nav-item ">
                        <a class="nav-link" href="{{ route('home') }}">INICIO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">LIBROS </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">USUARIOS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">EXAMENES</a>
                      </li>
                      <li class="nav-item">
                      </li>
                     @else
                     <li class="nav-item ">
                      <a class="nav-link" href="">EXAMENES <span class="sr-only">(current)</span></a>
                     </li>
                @endif


               @endif
               </ul>
                <ul class="navbar-nav ml-auto">
                <ul class="navbar-nav mr-auto">
                @guest
                    <li style="margin-bottom: -25px;" class="nav-item ">
                        <a class="text-muted nav-link" href="{{ route('login') }}">
                            <span class="menu_usuario mr-2" style="float:left;" > Menu|Usuario </span> 
                            <i class="fas fa-user-circle fa-2x"> </i>
                        </a>
                    </li>
                @else
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>


        </div>

      </nav>
      
        
            @yield('contenido')
      
    </div>

    
    <script src="{{ asset('dropzone.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    @yield('scriptlocal')
  
   
    
</body>

</html>
