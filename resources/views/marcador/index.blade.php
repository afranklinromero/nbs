
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">INICIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="">LIBROS </a></li>
                            <li class="nav-item"><a class="nav-link" href="">USUARIOS</a></li>
                            <li class="nav-item"><a class="nav-link" href="">EXAMENES</a></li>
                            <li class="nav-item"></li>
                        @else
                            <li class="nav-item active"><a class="nav-link" href="">EXAMENES <span class="sr-only">(current)</span></a></li>
                        @endif
                    @endif
                </ul>
                <form action="{{route ('marcador.buscar2') }}" method="GET" class="form-inline">
                    {{ csrf_field() }}
                    <div class="form-group col-md-12 text-center">
                            <a href="{{ route('libro.index') }}">
                                <img class="mb-3 mr-5" src="{{ asset('nbs.jpg')}}" alt="Sistema de busqueda de Normas Bolivianas de Salud" srcset="" width="100">
                            </a>
                            {!! Form::hidden('libro_id', $marcadores->first()->libro->id) !!}
                            {!! Form::text('nombre',null,['class'=>'form-control caja','placeholder'=>' &#x1F50D; ', 'size'=>'100'])!!}
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
      <hr width=90% size=20 style="margin-top: 0rem;">
        <main class="py-4">


        <div class="container">


    @include('marcador.aside.info')
    <ul class="navbar-nav mr-auto">

    <div class="row">
    <div class="col-4">
        <h3>TAPA</h3>
        <a href="{{ route('libro.index') }}">
                                <img class="mb-3 mr-5" src="{{ asset('tapas/27.png')}}" alt="Malaria" srcset="" width="40%">
                            </a>
    <table class="table">
        <thead>

            <th scope="col">Descripcion</th>

            </tr>
        </thead>
        <tbody>
            @foreach($marcadores as $marcador)
            <tr>

                    <td>
                        <p>
                            <span>@for($i=1; $i<($marcador->nivel-1)*3; $i++) &nbsp; @endfor </span>
                            <span class="text-primary text-muted">
                                <a class="go-to-page" href="{{asset('libros') }}/{{$marcador->libro->documentopdf}}#page={{$marcador->pagina}}">
                                    {{$marcador->nombre}}
                                </a>
                                {!! Form::open(['route' => 'marcador.irapagina', 'method' => 'get', 'id' => 'frmirapagina']) !!}
                                    {{ csrf_field() }}
                                    {!! Form::hidden('documentopdf', $marcador->libro->documentopdf, null) !!}
                                    {!! Form::hidden('pagina', $marcador->pagina, null) !!}
                                    {!! Form::submit('ir', ['class' => 'btn btn-sm btn-primary', 'id' => 'go-to-page']) !!}
                                {!! Form::close() !!}

                            </span>
                        </p>
                        <p class="text-muted">
                            <strong class="text-lowercase">Numero › </strong> {{ $marcador->numero}} &nbsp;&nbsp;&nbsp;
                            <strong class="text-lowercase">pagina › </strong> {{ $marcador->pagina}} &nbsp;&nbsp;&nbsp;
                            <strong class="text-lowercase">numero publicación › </strong> {{ $marcador->tipomarcador_id}}
                        </p>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $marcadores->links() }}
    </div>
    <div class="col-8" id="paginalibro">

    </div>
  </div>


</div>

        </main>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    <script>
        $(document).on( "click", "#go-to-page", function() {
            event.preventDefault();
            var $form = $(this).parent();
            //
            $.get($form.attr('action'), $form.serialize(), function(result){
                console.log(result);
                $('#paginalibro').html(result);
            });
            //$embed.attr('src', $link);
            //alert();
        });
    </script>
</body>

</html>










