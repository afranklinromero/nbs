@extends('layouts.app-marcador')

@section('contenido')
    <div class="container">
        <div class="row show">
            <div class="col-md-4 show-left">
                @include('libro.aside.show-left')
            </div>
            <div class="col-md-8 show-right tam">
                @include('libro.aside.show-right')
            </div>
        </div>
    </div>
@endsection

@section('scriptlocal')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.3.200/pdf.min.js" integrity="sha512-YP2ayDGlp2agSpcEeqEbVBwpU1OjNVKk3teB/J5j0947d5wstmhirMUxHFQCh7Y7HwqZCAoqBEHlltvGReweTQ==" crossorigin="anonymous"></script>

<script>
    console.log( "n pagina: " + parametroURL('pagina'));
    var index = parseInt(parametroURL('pagina'));
    var pages = 1;
    var documentopdf = $("#srcdocumentopdf").val();
    mostrarPagina(index);

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

    function mostrarPagina(index){
        console.log("documento: " + documentopdf);
        pdfjsLib.getDocument(documentopdf).then(doc => {
            pages = doc._pdfInfo.numPages
            console.log("el documento contiene " + doc._pdfInfo.numPages + " paginas") ;
            
            doc.getPage(index).then((page) => {
                var canvas = document.getElementById('my_canvas');
                var context = canvas.getContext('2d');
                var viewport = page.getViewport(1);

                canvas.width = viewport.width;
                canvas.height = viewport.height;

                page.render({
                    canvasContext: context,
                    viewport: viewport
                });
                info();

            });

            
        });
    }

    function info(){
        $("#info").text(index + "/" + pages);
    }

    $(document).on('click', '#anterior', function(e) {
        event.preventDefault();
        index = (index>1)? index - 1: index;
        mostrarPagina(index);            
    });

    $(document).on('click', '#siguiente', function(e) {
        event.preventDefault();
        index = (index<pages)? index + 1: index;
        mostrarPagina(index);            
    });

    $(document).on( "click", ".go-to-page", function() {
        event.preventDefault();
        var $form = $(this).parent();
        index = parseInt($(this).prev().val());
        cargarPagina($form);
        
        
    });

    function cargarPagina($form){
        $.get($form.attr('action'), $form.serialize(), function(result){
            $('.show-right').html(result);
        });

        console.log(' cargando pagina index pagina: ' + index);
        mostrarPagina(index);
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
</script>
    
@endsection