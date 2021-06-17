<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="float-center">
        <form action="{{route ('libro.index') }}" method="GET" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group col-md-12 float-center">
                <a href="{{ route('libro.index') }}">
                    <img class="mt-2 mr-3" src="{{ asset('img/logo.nobosa3.svg')}}" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="" width="150">
                </a>
                {!! Form::hidden('libro_id', $libro->id) !!}
                {!! Form::text('titulo',null,['class'=>'form-control caja titulo','placeholder'=>' &#x1F50D; Introduzca su busqueda aquí', 'size' => '80',])!!}
            </div>
        </form>
      </div>
      <ul class="navbar-nav ml-auto">
      <ul class="navbar-nav mr-auto">
      @guest
          <li style="margin-bottom: 5px;" class="nav-item active"><a class="text-muted nav-link" href="{{ route('login') }}">
              <span class="menu_usuario mr-2" style="float:left;" > OLIMPIADAS DE CONOCIMIENTO </span> <i class="fas fa-user-circle fa-2x"> </i>
          </a></li>
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


   </div>

</nav>