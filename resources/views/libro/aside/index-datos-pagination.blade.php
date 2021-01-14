<div id="pagination">
    <div>
        @if (isset($mensaje))
            <p> <strong> encontraron {{$libros->total()}} resultados, pagina {{$libros->currentPage()}} de {{$libros->lastPage()}} </strong></p>
        @endif
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
                                <strong class="text-lowercase">lind › </strong> <a id="pagination" href="{{ route('libro.pagination', $libros->currentPage())}}">{{ route('libro.pagination')}}</p><br>
                            </p>
                        </td>
                    </tr>
                @endforeach    
            @else
                
            @endif
            
        </tbody>
    </table>
    
    {{ $libros->links() }} 
</div>