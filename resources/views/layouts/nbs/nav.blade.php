<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{{ route('index') }}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
        <!--INICIO MENUS A LA IZQUIERDA-->
        <ul class="navbar-nav ">
            <li class="nav-item ">
                <a href="{{ route('libro.index') }}">
                    <img class="m-2" src="{{ asset('img/logo.nobosa3.svg')}}" height="23" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="">
                </a>
                <!--<a class="nav-link" href="{{ route('home') }}">INICIO</a>-->
            </li>

            <li class="nav-item">
                <a class="nav-link btn-outline-light" href="{{ route('libro.index') }}">LIBROS </a>
            </li>

            <li class="nav-item">
                <a class="nav-link btn-outline-light" href="{{ route('blog.index') }}">BLOG </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('sugerenciasnbs.create') }}">SUGERENCIAS </a>
            </li>

            <li class="nav-item">
                <a class="nav-link btn-outline-light text-success" href="https://share.vidyard.com/watch/vCncxCeFgFxyu22aG4zU52" target="_blank"><strong>COMO UTILIZAR EL BUSCADOR ? </strong></a>
            </li>

            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concurso.index') }}">OLIMPIADAS DE CONOCIMIENTO</a>
                </li>
            @endif

            @if (Auth::check() && Auth::user()->hasRole('admin'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ADMINISTRADOR
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('publicidad.index')}}">ADMINISTRAR BLOG</a>
                        <a class="dropdown-item" href="{{route('blog.index')}}">ADMINISTRAR PUBLICIDAD</a>
                        <a class="dropdown-item" href="{{route('sugerenciasnbs.index')}}">ADMINISTRAR SUGERENCIAS</a>
                    </div>
                </li>
            @endif
        </ul>
        <!--FIN MENUS A LA IZQUIERDA-->

        <!--FIN MENUS A LA DERECHA-->

        <ul class="navbar-nav ml-auto">
            <ul class="navbar-nav mr-auto">
                @guest
                    <li style="margin-bottom: -25px;" class="nav-item ">
                        <a class="text-muted nav-link" href="{{ route('login') }}">
                            <span class="menu_usuario mr-2" style="float:left;" > OLIMPIADAS DE CONOCIMIENTO </span>
                            <i class="fas fa-user-circle fa-2x"> </i>
                        </a>
                    </li>
                @else
                    <li class="dropdown">
                        <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }}
                            <img class="img-fluid img-thumbnail rounded-circle" width="30" src="{{ asset('img/log-img.png') }}" alt="">
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('users.show', Auth::user()->id) }}">Datos de usuario <span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Cerrar session
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </ul>
    </div>
</nav>
