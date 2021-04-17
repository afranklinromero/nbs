<!--<iframe src="https://docs.google.com/gview?embedded=true&url={{asset('libros') }}/{{$documentopdf}}#page={{$pagina}}" style="width:100%;" height="100%" frameborder="0"></iframe>-->
<!--<iframe src="https://docs.google.com/gview?embedded=true&url=https://normasbolivianasdesalud.com/libros/37-malaria.pdf#page=10" style="width:100%;" height="100%" frameborder="0"></iframe>-->
<!--<iframe id="iframe1" src="http://docs.google.com/gview?url=normasbolivianasdesalud/libros/{{ $documentopdf }}&embedded=true#:0.page.{{ $pagina }}">-->
<!--<iframe src="http://docs.google.com/gview?embedded=true&url=https://normasbolivianasdesalud.com/libros/{{ $documentopdf }}#:0.page.15" style="width:100%;" height="100%">-->

<!--<embed class="d-none d-sm-none d-md-block" src="{{asset('libros')}}/{{$documentopdf}}#page={{$pagina}}" type='application/pdf' width='100%' height='100%'/>-->
<iframe
    class='pdfembed'
    src= '{{ asset('pdfjs/web/viewer.html') }}?file={{asset('libros/')}}/{{ $documentopdf }}'
    width='100%'
    height='720px'
    style="width: 100%"
    >
</iframe>

<!--<div class="text-white d-block d-sm-block d-md-none">-->

<!--
<div class="text-white">
    <div id="navigation" class="controls text-center bg-dark">
        <button class="btn btn-dark" id="go_previous"><i class="fas fa-chevron-left"></i></button>
        <input type="number" value="1" id="current_page" size="2" min=1 max=10 style="width: 50px">/<span id="numPages">30</span>
        <button class="btn btn-dark" id="go_next"><i class="fas fa-chevron-right"></i></button>
        <button class="btn btn-dark" id="zoom_out"><i class="fas fa-search-minus"></i></button>
        <span id="zoom_pdf">100%</span>
        <button class="btn btn-dark" id="zoom_in"><i class="fas fa-search-plus"></i></button>
    </div>
    <div id="my_pdf_viewer">
        <div id="canvas_container" style="background: #333; overflow: auto; text-align: center; border: 3px solid;">
            <canvas id="pdf_renderer"></canvas>
        </div>
    </div>
</div>
-->
