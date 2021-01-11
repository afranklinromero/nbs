
<table class="table">
    <thead>
        <tr>
            <th scope="col">Indice</th>
        </tr>
    </thead>
    <tbody>
        {!! Form::open(['route' => 'marcador.irapagina', 'method' => 'get', 'id' => 'frmirapagina1']) !!}
            {{ csrf_field() }}
            {!! Form::hidden('documentopdf', $marcadores[0]->libro->documentopdf, null) !!}
            {!! Form::hidden('pagina', '1', null) !!}
            
            <a class="go-to-page-1" href="{{asset('libros') }}/{{$marcadores[0]->libro->documentopdf}}#page=1">
                pagina1
            </a>
        {!! Form::close() !!}
        
        @foreach($marcadores as $marcador)
        <tr>
            <td>
                {!! Form::open(['route' => 'marcador.irapagina', 'method' => 'get', 'id' => 'frmirapagina']) !!}
                    {{ csrf_field() }}
                    {!! Form::hidden('documentopdf', $marcador->libro->documentopdf, null) !!}
                    {!! Form::hidden('pagina', $marcador->pagina, null) !!}
                    
                    <a class="go-to-page" href="{{asset('libros') }}/{{$marcador->libro->documentopdf}}#page={{$marcador->pagina}}">
                        {{$marcador->nombre}}
                    </a>
                    <p class="text-muted">
                        <strong class="text-lowercase">Numero › </strong> {{ $marcador->numero}} &nbsp;&nbsp;&nbsp;
                        <strong class="text-lowercase">pagina › </strong> {{ $marcador->pagina}} &nbsp;&nbsp;&nbsp;
                        <strong class="text-lowercase">numero publicación › </strong> {{ $marcador->tipomarcador_id}}
                    </p>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>    
</table>
{{ $marcadores->links() }}