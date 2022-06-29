
<!--<h3 class="text-success">{{$blog->titulo}}</h3>-->

<div class="container">


<div class="row justify-content-md-center">
    <div class="col-md-10">
        @if (isset($blog->imagen))
            <img class='img-fluid rounded float-left mr-3 mb-3' src="{{asset('storage/files/blog/'. $blog->id. '/' .$blog->imagen)}}" alt="" width="100%">
        @endif
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-md-8">
        <p class="fs-5">
            {{ $blog->contenido }}
        </p>

    </div>
</div>

    <div class="row justify-content-md-center">
        <div class="col-md-8 ">
            @if (isset($blog->youtube))
            <!--
                <iframe width="100%" height="300"
                    src="{{ $blog->youtube }}"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/J7pPvjGU6SY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                -->
            @endif

            @if (isset($blog->documentopdf))
                <p>{{ asset('storage/files/blog/'.$blog->id.'/'.$blog->documentopdf) }}</p>
                <iframe
                    class='pdfembed'
                    src= '{{ asset('pdfjs/web/viewer.html') }}?file={{asset('storage/files/blog/'.$blog->id.'/'.$blog->documentopdf)}}'
                    width='100%'
                    height = '300'
                    >
                </iframe>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary btn-sm" target="_blank" href="{{ asset('storage/files/blog/') }}/{{ $blog->id }}/{{$blog->id}}.pdf">abrir documento pdf</a>
                    <a download="{{$blog->documentopdf}}" class="btn btn-success btn-sm" href="{{ asset('storage/files/blog/') }}/{{ $blog->id }}/{{$blog->documentopdf}}" >descargar</a>
                </div>

            @endif
        </div>
    </div>
</div>
<div class="row justify-content-md-center p-5">
    <div class="col-md-8 font-italic text-muted float-center">
         <strong>fecha:</strong>  {{ $blog->created_at->format('d/m/Y') }} |
         <strong>ref:</strong>  {{ $blog->referencia }} |
         <strong>autor:</strong>  {{ $blog->autor }} |
         <strong>estado:</strong> <span class={{($blog->estado==1)?'text-success':'text-danger'}}>{{ ($blog->estado==1)?'activo':'anulado' }} </span>
    </div>
</div>

