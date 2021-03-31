<div id="pagination">
    
    <div>
        @if (isset($mensaje))
            <p> <strong> encontraron {{$marcadores->total()}} resultados, pagina {{$marcadores->currentPage()}} de {{$marcadores->lastPage()}} </strong></p>
        @endif
    </div>
            @if (count($marcadores->items())>0)
                @foreach($marcadores as $marcador)
                    <div class="row row-cols-2">
                        <div class="col-2">
                            <div class="text-center">
                                <a href="#">
                                    <img src="{{ asset('tapas/') }}/{{ $marcador->libro->tapa}}" class="rounded img-thumbnail" width="100" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8">
                            
                            {!! Form::open(['route' => ['libro.show', $marcador->libro->id], 'method' => 'GET', 'id' => 'frmlibroshow']) !!}
                                
                                <h5 class="text-success">LIBRO: {{ $marcador->libro->titulo }}</h5>
                                <h5> <a id="submitshow" href="#" onclick="document.getElementById('frmlibroshow').submit()"> {{ $marcador->nombre }} pag: {{$marcador->pagina}}</a></h5>
                                <!--{!! Form::submit($marcador->nombre . ' pag:' . $marcador->pagina, ['class' => 'btn btn-outline-info']) !!}-->
                                {!! Form::hidden('id', $marcador->libro->id) !!}
                                {!! Form::hidden('marcador_id', $marcador->id) !!}
                                {!! Form::hidden('pagina', $marcador->pagina) !!}
                                {!! Form::hidden('documentopdf', $marcador->libro->documentopdf) !!}
                                
                                <p class="text-dark"> <strong>Nombre archivo ›  </strong> <span class="text-secondary"> {{$marcador->libro->documentopdf}}</span> &nbsp; <strong>orden: </strong>{{$marcador->libro->orden }}</p>
                                <!--<p class="text-muted">
                                    <strong class="text-lowercase">serie › </strong> {{ $marcador->libro->serie}} <br>
                                </p>-->
                            {!! Form::close() !!}
                            </div>
                    </div>
                @endforeach
            @else

            @endif

    {{ $marcadores->links() }}
    
</div>
