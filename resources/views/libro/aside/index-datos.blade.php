        <h4>Busquedas frecuentes</h4>
        <div id="busqueda" class="text-center">
            
            @foreach ($busquedas as $busqueda)
                <form action="{{route ('libro.index') }}" method="GET" class="d-inline">
                    {!! Form::hidden('titulo', $busqueda->frase) !!}
                        <a href="#" class="btn btn-success btn-sm m-1 titulo">
                            {{ $busqueda->frase }} <span class="badge badge-light"> {{ $busqueda->frecuencia }}</span>
                        </a>
                </form>
            @endforeach
        </div>
    </div>

<table class="table">
    <tbody>
        @if (count($libros->items())>0)
            @foreach($libros as $libro)
                <tr>
                    <td>
                        <img src="{{ asset('tapas/') }}/{{ $libro->tapa}}" class="rounded" width="100" alt="" srcset="">
                    </td>
                    <td>
                    <p class="text-dark"> <strong>libro ›  </strong> <span class="text-secondary"> {{$libro->documentopdf}}</span> &nbsp; <strong>id: </strong>{{$libro->id }}</p>
                        <h4 class="text-info"><a href="{{ route('libro.show', $libro->id) }}"> {{ $libro->titulo }}</a> </h4>
                        <p class="text-muted">
                            <strong class="text-lowercase">serie › </strong> {{ $libro->serie}} <br>
                            <strong class="text-lowercase">lugar publicacion › </strong> {{ $libro->lugarpublicacion}}<br>
                            <strong class="text-lowercase">numero publicación › </strong> {{ $libro->nropublicacion}}<br>
                        </p>
                    </td>
                </tr>
            @endforeach    
        @else
        
            <p>No se encontraron resultados</p>
            
        @endif
        
    </tbody>
</table>

{{ $libros->links() }} 