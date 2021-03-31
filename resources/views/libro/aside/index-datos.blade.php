<div id="datos">
    <h4>Busquedas frecuentes</h4>
    <div id="busqueda" class="text-center">
        
        @foreach ($busquedas as $busqueda)
            <form action="{{route ('libro.index') }}" method="GET" class="d-inline">
                {!! Form::hidden('titulo', $busqueda->frase) !!}
                    <a href="#" class="btn btn-sm m-1 titulo" style="background-color: #cdd4cd; ">
                        {{ $busqueda->frase }} <span class="badge badge-light"> {{ $busqueda->frecuencia }}</span>
                    </a>
            </form>
        @endforeach
    </div>
    @include('libro.aside.index-datos-pagination')

</div>
