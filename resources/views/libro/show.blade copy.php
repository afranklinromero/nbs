@extends('layouts.app')

@section('contenido')
<div class="container">
        
      <div class="row">
        <div class="col-12 col-md-4">
            <div id="marcadores" style="width: 100%; overflow-y: scroll; display: flex; flex-direction: column;">
                <h3>TAPA</h3>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('tapas/27.png')}}" alt="Malaria" srcset="" width="50%">
                    </div>
                    <div class="col-md-6">
                        <strong class="text-lowercase">Titulo › </strong> {{ $libro->titulo}} &nbsp;&nbsp;&nbsp;
                        <strong class="text-lowercase">pagina › </strong>  &nbsp;&nbsp;&nbsp;
                        <strong class="text-lowercase">numero publicación › </strong>
                    </div>
                </div>
                <table class="table">
                <thead>

                    <th scope="col">Indice</th>

                    </tr>
                </thead>
                <tbody>
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
            </div>
        </div>
        <div class="col-15 col-md-8" id="paginalibro">
            <p>hola</p>
        </div>
    </div>

</div>

@endsection

@section('scriptlocal')
<script>
    $(document).ready(function(){

        var height = $(window).height();

        $('#marcadores').height(height);
    });
    $(document).on( "click", ".go-to-page", function() {
        event.preventDefault();
        //alert('go to page');
        var $form = $(this).parent();
        console.log('go.top-age');
        console.log($form.attr('action'));
        $.get($form.attr('action'), $form.serialize(), function(result){
            //console.log(result);
            $('#paginalibro').html(result);
        });
        //$embed.attr('src', $link);
        //alert();
    });

    $(document).on( "click", ".page-link", function() {
        event.preventDefault();
        //alert('go to page');
        alert('hola');
    });
</script>
    
@endsection