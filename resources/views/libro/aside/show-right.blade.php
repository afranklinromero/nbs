
<iframe
    class='pdfembed'
    src= '{{ asset('pdfjs/web/viewer.html') }}?file={{asset('storage/files/libros/pdfs/'.$libro->documentopdf)}}'
    width='100%'
    height='620px'
    style="width: 100%"
    >
</iframe>
