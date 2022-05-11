@extends('layouts.nbs.app')

@section('contenido')
    <div class="container">
        @include('libro.aside.info')
        <div class="row mb-1">
            <div class="col">
                <h4>
                    <strong class="text-lowercase text-primary">titulo › </strong> <span class="text-uppercase">{{ $libro->titulo }} </span>
                    <div class="float-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                            @if (Auth::check() && Auth::user()->hasRole('admin'))
                                <a href="{{ route('libro.create') }}" class="btn btn-success">Nuevo</a>    
                                <a href="{{ route('libro.edit', $libro->id) }}" class="btn btn-success">Editar</a>
                                <a 
                                    href="{{ route('libro.create') }}" 
                                    class="btn btn-danger" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#deleteLibroModal{{ $libro->id }}" 
                                    data-bs-toggle="tooltip" 
                                    data-bs-placement="top" 
                                    title="Eliminar articulo"
                                    >
                                    Eliminar
                                </a>    

                                <!-- Modal -->
                                <div class="modal fade" id="deleteLibroModal{{ $libro->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteLibroModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-primary" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title" id="deleteLibroModalLabel">Eliminar registro</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body bg-ligth">
                                                <span class="fw-bold">Eliminar libro: <br>
                                                    <span class="text-success">{{ $libro->titulo }}</span><br><br>
                                                    Desea Eliminar el Libro?</span>
                                            </div>
                                            <div class="modal-footer">
                                                <form class="d-inline" method="POST" action="{{ route('libro.destroy', $libro->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">Confirmar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                            <a href="{{ route('libro.index') }}" class="btn btn-success">Volver</a>
                        </div>
                    </div>
                </h4>
            </div>
        </div>
        <div class="row show">
            <div class="col-md-2 show-left"> @include('libro.aside.show-left')</div>
            <div class="col-md-10 show-right tam">
                @include('libro.aside.show-right')
            </div>
        </div>
    </div>
@endsection



@section('scriptlocal')

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.3.200/pdf.min.js" integrity="sha512-YP2ayDGlp2agSpcEeqEbVBwpU1OjNVKk3teB/J5j0947d5wstmhirMUxHFQCh7Y7HwqZCAoqBEHlltvGReweTQ==" crossorigin="anonymous"></script>-->

<script>
    /*
    $('.pdfembed').attr('height', screen.height -250)
    var myState = {
        pdf : 'help.pdf',
        currentPage: 1,//parseInt(parametroURL('pagina')),
        zoom: 1
    }
    */

    //console.log( "n pagina: " + myState.currentPage);

    //var documentopdf = $("#srcdocumentopdf").val();
    //console.log("documento pdf: " + documentopdf);


    //render();
/*
    function parametroURL(_par) {
        var _p = null;
        if (location.search) location.search.substr(1).split("&").forEach(function(pllv) {
            var s = pllv.split("="), //separamos llave/valor
            ll = s[0],
            v = s[1] && decodeURIComponent(s[1]); //valor hacemos encode para prevenir url encode
            if (ll == _par) { //solo nos interesa si es el nombre del parametro a buscar
                if(_p==null){
                    _p=v; //si es nula, quiere decir que no tiene valor, solo textual
                }else if(Array.isArray(_p)){
                    _p.push(v); //si ya es arreglo, agregamos este valor
                }else{
                    _p=[_p,v]; //si no es arreglo, lo convertimos y agregamos este valor
                }
            }
        });
        return _p;
    }

    pdfjsLib.getDocument(documentopdf).then(pdf => {
        console.log("hello");
        console.log("paginas documento: " + pdf._pdfInfo.numPages);
        $("#numPages").text(pdf._pdfInfo.numPages);
        $("#current_page").attr("max", pdf._pdfInfo.numPages);
        myState.pdf = pdf;

        render();
    });

    function render(){
        myState.pdf.getPage(myState.currentPage).then(page => {
            var canvas = document.getElementById("pdf_renderer");
            var ctx = canvas.getContext("2d");
            var viewport = page.getViewport(myState.zoom);

            canvas.width = viewport.width;
            canvas.height = viewport.height;

            page.render({
                canvasContext: ctx,
                viewport: viewport
            })
        });
    }
    */

/*
    $(document).on('click', '#go_previous', function(e) {
        event.preventDefault();

        if (myState.pdf == null || myState.currentPage == 1) return;

        myState.currentPage--;
        document.getElementById("current_page").value = myState.currentPage;
        render();
    });

    $(document).on('click', '#go_next', function(e) {
        event.preventDefault();

        if (myState.pdf == null || myState.currentPage >= myState.pdf._pdfInfo.numPages) return;

        myState.currentPage++;
        document.getElementById("current_page").value = myState.currentPage;
        render();
    });

    $(document).on('keypress', '#current_page', function(e) {
        //event.preventDefault();

        var code = (e.keyCode ? e.keyCode: e.which);

        if (code == 13){
            var desiredPage = document.getElementById("current_page").valueAsNumber;
        }
        if (desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
            myState.currentPage = desiredPage;
            document.getElementById("current_page").value = myState.currentPage;
            render();
        }

    });

    $(document).on('change', '#current_page', function(e) {
        //event.preventDefault();
        desiredPage = document.getElementById("current_page").valueAsNumber;
        console.log( "pagina: " + desiredPage);
        if (desiredPage >= 1 && desiredPage <= myState.pdf._pdfInfo.numPages) {
            myState.currentPage = desiredPage;
            document.getElementById("current_page").value = myState.currentPage;
            render();
        }

    });

    $(document).on('click', '#zoom_in', function(e) {

        if (myState.pdf == null ) return;

        myState.zoom = myState.zoom + 0.1;
        console.log("zoom: " + myState.zoom);
        $("#zoom_pdf").text((myState.zoom * 100).toFixed() + "%");

        render();
    });

    $(document).on('click', '#zoom_out', function(e) {

        if (myState.pdf == null ) return;

        myState.zoom = myState.zoom - 0.1;
        console.log("zoom: " + myState.zoom);
        $("#zoom_pdf").text((myState.zoom * 100).toFixed() + "%");
        render();
    });

    $(document).on( "click", ".go-to-page", function() {
        event.preventDefault();
        var $form = $(this).parent();
        myState.currentPage = parseInt($(this).prev().val());
        render();


    });
*/


/*
    function cargarPagina($form){
        $.get($form.attr('action'), $form.serialize(), function(result){
            $('.show-right').html(result);
        });

        console.log(' cargando pagina index pagina: ' + myState.currentPage);
        render();
    }

    $(document).on( "click", ".page-link", function() {
        event.preventDefault();
        var frm = $('#frm-buscar');
        var href = $(this).attr('href');

        if (href != null){
            var page = href.split('page=')[1];
            console.log(page);
            $.get(frm.attr('action') + '?page=' + page, frm.serialize(), function(result){
                $('.show-left-body').html(result);
            });
        } else {
            console.log('href undefined');
        }
    });

    $(document).on('keypress', '.nombre-libro', function(e) {
        if(e.which == 13) {
            event.preventDefault();
            var form = $(this).parent().parent();
            console.log(form.attr('action'));

            $.get(form.attr('action'), form.serialize(), function(result){
                $('.show-left-body').html(result);
            });
        }
    });

    $(document).on('keypress', '.titulo', function(e) {
        if(e.which == 13) {
            event.preventDefault();
            var form = $(this).parent().parent();
            console.log(form.attr('action'));

            $.get(form.attr('action'), form.serialize(), function(result){
                console.log(result);
                $('.show').html(result);
            });

        }
    });

    $(document).on('click', '.submitshow', function(e) {
        event.preventDefault();
        //alert('ok')
        var form = $(this).parent().parent();
        //alert(form.attr('action'));
        form.submit();
        /*
        console.log("ruta libro marcador: " + form.attr('action'));

        $.get(form.attr('action'), form.serialize(), function(result){
            //console.log(result);
            $('.container').html(result);
        });
        
    });

    */

</script>

@endsection
