<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          @if( Auth::check())
               @if(Auth::user()->hasRole('admin'))
                  <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">INICIO</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('libro.index') }}">LIBRITOS </a></li>
                  <li class="nav-item"><a class="nav-link" href="">USUARIOS</a></li>
                  <li class="nav-item"><a class="nav-link" href="">EXAMENES-.....</a></li>
                  <li class="nav-item"></li>
              @else
                  <li class="nav-item active"><a class="nav-link" href="">EXAMENES <span class="sr-only">(current)</span></a></li>
              @endif
          @endif
      </ul>
      <form action="{{route ('libro.index') }}" method="GET" class="form-inline">
          {{ csrf_field() }}
          <div class="form-group col-md-12 text-center">
                  <a href="{{ route('libro.index') }}">
                      <img class="mb-3 mr-5" src="{{ asset('img/logo.nobosa-2.png')}}" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="" width="150">
                  </a>
                  {!! Form::hidden('libro_id', $libro->id) !!}
                  {!! Form::text('titulo',null,['class'=>'form-control caja titulo','placeholder'=>' &#x1F50D; ', 'size'=>'100'])!!}
          </div>
      </form>
      <ul class="navbar-nav ml-auto">
      <ul class="navbar-nav mr-auto">
      @guest
          <li style="margin-bottom: 5px;" class="nav-item active"><a class="text-muted nav-link" href="{{ route('login') }}">
              <span class="menu_usuario mr-2" style="float:left;" > Menu|Usuario </span> <i class="fas fa-user-circle fa-2x"> </i>
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