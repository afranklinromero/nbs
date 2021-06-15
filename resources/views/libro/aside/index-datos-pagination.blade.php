<div id="pagination">

    <div>
        @if (count($libros->items())>0)
            <p> <strong> encontraron {{$libros->total()}} resultados, pagina {{$libros->currentPage()}} de {{$libros->lastPage()}} </strong></p>
        @endif
    </div>
            @if (count($libros->items())>0)
                <div class="row">
                    @foreach($libros as $i=>$libro)
                        @php
                            $titulomarcado = strtoupper($libro->titulo);
                            if (isset($titulos)){
                                foreach ($titulos as $key => $value) {
                                    $titulomarcado = str_replace(strtoupper($value), "<span class='bg-warning'>" .strtoupper($value) . "</span>", $titulomarcado);
                                }
                            }
                            //echo ucwords(strtolower($titulomarcado));
                        @endphp

                        @if (($i%10)==0 && $i>0)
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                @include('publicidad.aside.carrousel')
                            </div>
                            <div class="col-md-3"></div>
                        @endif
                        
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="card mb-3 shadow-sm" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-4">
                                    <a href="{{ route('libro.show', $libro->id) }}">
                                        <img src="{{ asset('storage/files/libros/tapas/'.$libro->tapa) }}" class="rounded img-fluid"  alt="" srcset="">
                                    </a>
                                  </div>
                                  <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="text-primary" href="{{ route('libro.show', $libro->id) }}">
                                            @php echo ucwords(strtolower($titulomarcado)); @endphp
                                        </a>
                                        </h5>
                                      <p class="card-text"><strong>autor:</strong> <small class="text-muted">{{ $libro->autor }}</small></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--
                            <div class="row">
                                <div class="col-5">
                                    <div class="text-left">
                                        <a href="{{ route('libro.show', $libro->id) }}">
                                            <img src="{{ asset('tapas/') }}/{{ $libro->tapa}}" class="rounded img-thumbnail"  alt="" srcset="">
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h5>
                                        <a class="text-primary" href="{{ route('libro.show', $libro->id) }}">
                                            @php echo ucwords(strtolower($titulomarcado)); @endphp
                                        </a>
                                    </h5>
                                    <p><strong>autor: </strong>{{ $libro->autor }}</p>
                                </div>
                            </div>
                            <br>
                            <hr class="bg-danger" width="100%">-->
                        </div>
                    @endforeach
                </div>
            @else

            @endif

    {{ $libros->links() }}

</div>
