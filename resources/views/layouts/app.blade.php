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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dropzone.css') }}">

    <script src="{{ asset('dropzone.js')}}"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                @if( Auth::check())
                     @if(Auth::user()->hasRole('admin'))
                     <li class="nav-item">
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
                     <li class="nav-item active">
                      <a class="nav-link" href="">EXAMENES <span class="sr-only">(current)</span></a>
                    </li>


                    @endif


               @endif
           </ul>
                <ul class="navbar-nav ml-auto">
                <ul class="navbar-nav mr-auto">

                @guest
                                <li style="margin-bottom: -25px;" class="nav-item active"><a class="text-muted nav-link" href="{{ route('login') }}"> <span class="menu_usuario mr-2" style="float:left;" > Menu|Usuario </span> <i class="fas fa-user-circle fa-2x"> </i>
</a></li>


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
      <hr width=90% size=20>
        <main class="py-4">
            @yield('contenido')
        </main>
    </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  @yield('scriptlocal')

</body>

</html>
