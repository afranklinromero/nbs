<div id="pagination">

    <div>
        @if (isset($mensaje))
            <p> <strong> encontraron {{$libros->total()}} resultados, pagina {{$libros->currentPage()}} de {{$libros->lastPage()}} </strong></p>
        @endif
    </div>
            @if (count($libros->items())>0)
                @foreach($libros as $libro)
                <hr>
                    <div class="row row-cols-2">
                        <div class="col-2">
                            <div class="text-center">
                                <a href="#">
                                    <img src="{{ asset('tapas/') }}/{{ $libro->tapa}}" class="rounded img-thumbnail" width="150" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8">

                            {!! Form::open(['route' => ['libro.show', $libro->id], 'method' => 'GET', 'id' => 'frmlibroshow']) !!}
                                <!--{!! Form::submit($libro->titulo . ' pag:' . $libro->id, ['class' => 'btn btn-outline-info']) !!}-->
                                {!! Form::hidden('id', $libro->id) !!}
                                {!! Form::hidden('marcador_id', $libro->id) !!}
                                {!! Form::hidden('pagina', $libro->id) !!}
                                {!! Form::hidden('documentopdf', $libro->documentopdf) !!}
                                <!--<h5 class="text-success">{{ $libro->titulo }}</h5>-->
                                <h5> <a class="submitshow-1" href="{{ route('libro.show', $libro->id) }}">
                                    @php
                                        $titulomarcado = strtoupper($libro->titulo);

                                        if (isset($titulos)){
                                            foreach ($titulos as $key => $value) {
                                                $titulomarcado = str_replace(strtoupper($value), "<span class='bg-warning'>" .strtoupper($value) . "</span>", $titulomarcado);
                                            }
                                        }
                                        echo $titulomarcado;
                                    @endphp
                                    <!--pag: {{$libro->id}}-->
                                    </a>
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores eligendi similique optio eveniet sint, qui at quibusdam soluta ipsam earum, harum obcaecati cum consequatur voluptatum doloremque, a nisi libero sapiente!
                                </p>


                                <p class="text-dark"> <strong>Nombre archivo ›  </strong> <span class="text-secondary"> {{$libro->documentopdf}}</span> &nbsp; <strong>orden: </strong>{{$libro->orden }}</p>
                                <!--<p class="text-muted">
                                    <strong class="text-lowercase">serie › </strong> {{ $libro->serie}} <br>
                                </p>-->
                            {!! Form::close() !!}
                            </div>
                    </div>
                @endforeach
            @else

            @endif

    {{ $libros->links() }}

</div>
