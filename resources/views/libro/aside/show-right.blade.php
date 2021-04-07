<!--<iframe src="https://docs.google.com/gview?embedded=true&url={{asset('libros') }}/{{$documentopdf}}#page={{$pagina}}" style="width:100%;" height="100%" frameborder="0"></iframe>-->
<!--<iframe src="https://docs.google.com/gview?embedded=true&url=https://normasbolivianasdesalud.com/libros/37-malaria.pdf#page=10" style="width:100%;" height="100%" frameborder="0"></iframe>-->
<!--<iframe id="iframe1" src="http://docs.google.com/gview?url=normasbolivianasdesalud/libros/{{ $documentopdf }}&embedded=true#:0.page.{{ $pagina }}">-->
<!--<iframe src="http://docs.google.com/gview?embedded=true&url=https://normasbolivianasdesalud.com/libros/{{ $documentopdf }}#:0.page.15" style="width:100%;" height="100%">-->
<embed class="d-none d-sm-none d-md-block" src="{{asset('libros')}}/{{$documentopdf}}#page={{$pagina}}" type='application/pdf' width='100%' height='100%'/>

<div class="text-primary d-block d-sm-block d-md-none">
<!--<div class="text-primary">-->
    <button class="btn btn-sma btn-success" id="anterior"><</button>
    <span id="info"></span>
    <button class="btn btn-small btn-success" id="siguiente">></button>
    <div>
        <canvas id="my_canvas"></canvas>
    </div>
</div>
