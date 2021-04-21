<div id="pagination">

    <div>
        @if (count($libros->items())>0)
            <p> <strong> encontraron {{$libros->total()}} resultados, pagina {{$libros->currentPage()}} de {{$libros->lastPage()}} </strong></p>
        @endif
    </div>
            @if (count($libros->items())>0)
                <div class="row">
                    @foreach($libros as $libro)
                        @php
                            $titulomarcado = strtoupper($libro->titulo);
                            if (isset($titulos)){
                                foreach ($titulos as $key => $value) {
                                    $titulomarcado = str_replace(strtoupper($value), "<span class='bg-warning'>" .strtoupper($value) . "</span>", $titulomarcado);
                                }
                            }
                            //echo ucwords(strtolower($titulomarcado));
                        @endphp
                        
                        <div class="col-sm-12 col-md-4">
                            <div class="row">
                                <div class="col-5">
                                    <div class="text-center">
                                        <a href="{{ route('libro.show', $libro->id) }}">
                                            <img src="{{ asset('tapas/') }}/{{ $libro->tapa}}" class="rounded img-thumbnail"  alt="" srcset="">
                                        </a>
                                        <hr class="bg-info" width="250%">
                                    </div>
                                </div>
                                <div class="col-7">
                                        <h5> 
                                            <a class="text-primary" href="{{ route('libro.show', $libro->id) }}">
                                                @php echo ucwords(strtolower($titulomarcado)); @endphp
                                            </a>
                                        </h5>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else

            @endif

    {{ $libros->links() }}

</div>
