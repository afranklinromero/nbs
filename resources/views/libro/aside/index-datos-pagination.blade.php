<div id="pagination">
    <div>
        @if (isset($mensaje))
            <p> <strong> encontraron {{$marcadores->total()}} resultados, pagina {{$marcadores->currentPage()}} de {{$marcadores->lastPage()}} </strong></p>
        @endif
    </div>
    <table class="table">
        <tbody>
            @if (count($marcadores->items())>0)
                @foreach($marcadores as $marcador)
                    <tr>
                        <td>
                            <img src="{{ asset('tapas/') }}/{{ $marcador->libro->tapa}}" class="rounded" width="100" alt="" srcset="">
                        </td>
                        <td>
                            {!! Form::open(['route' => ['libro.show', $marcador->libro->id], 'method' => 'GET']) !!}
                                {!! Form::hidden('id', $marcador->libro->id) !!}
                                {!! Form::hidden('marcador_id', $marcador->id) !!}
                                {!! Form::hidden('pagina', $marcador->pagina) !!}
                                {!! Form::hidden('documentopdf', $marcador->libro->documentopdf) !!}
                                <p class="text-dark"> <strong>LIBRO ›  </strong> <span class="text-secondary"> {{$marcador->libro->documentopdf}}</span> &nbsp; <strong>id: </strong>{{$marcador->libro->id }}</p>
                                <h4 class="text-info"><a href="{{ route('libro.show', $marcador->libro->id) }}"> {{ $marcador->libro->titulo }}</a> </h4>
                                <h5 class="text-info">
                                    {!! Form::submit($marcador->nombre . ' pag:' . $marcador->pagina, ['class' => 'btn btn-success']) !!} <br>
                                    <a href="{{ route('libro.show', $marcador->libro->id) }}"> {{ $marcador->nombre }}</a> 
                                </h5>
                                <p class="text-muted">
                                    <strong class="text-lowercase">serie › </strong> {{ $marcador->libro->serie}} <br>
                                </p>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach    
            @else
                
            @endif
            
        </tbody>
    </table>
    
    {{ $marcadores->links() }} 
</div>