
<table class="table-responsive">
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

            <a class="go-to-page-1" href="{{asset('libros') }}/{{$marcadores[0]->libro->documentopdf}}#page={{$pagina}}" hidden>
                pagina1
            </a>
        {!! Form::close() !!}

        @foreach($marcadores as $marcador)
        <tr>
            <td>
                {!! Form::open(['route' => 'marcador.irapagina', 'method' => 'get', 'id' => 'frmirapagina']) !!}
                    {{ csrf_field() }}
                    {!! Form::hidden('srcdocumentopdf', asset('libros') ."/" . $marcador->libro->documentopdf, ["id" => "srcdocumentopdf"]) !!}
                    {!! Form::hidden('documentopdf', $marcador->libro->documentopdf, ["id" => "documentopdf"]) !!}
                    {!! Form::hidden('pagina', $marcador->pagina, ["id" => "pagina"]) !!}
                    <a class="go-to-page text-success" href='#'>{{$marcador->nombre}}</a>
                    <!--<a class="go-to-page text-success d-none d-sm-none d-md-block" href='#'>{{$marcador->nombre}}[web]</a>-->
                    <!--<a class="text-primary d-block d-sm-block d-md-none" target="_blank" href="{{ asset('libros')}}/{{$libro->documentopdf}}#page={{$marcador->pagina}}">{{$marcador->nombre}}[mobil]</a>-->
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
