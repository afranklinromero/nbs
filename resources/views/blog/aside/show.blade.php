@include('blog.aside.info')
<!--<h3 class="text-success">{{$blog->titulo}}</h3>-->
<div class="row">
    <div class="col-md-12">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 text-justify">
                    <img class='img-fluid rounded float-left mr-3 mb-3' src="{{asset('img/blog/'. $blog->id. '.' . $blog->ext)}}" alt="" width="100%">
                    <iframe width='100%' height="300"  src=»//www.youtube.com/embed/RAGnHADKIIM» frameborder=»0″ allowfullscreen></iframe>
                    <iframe
                        class='pdfembed'
                        src= '{{ asset('pdfjs/web/viewer.html') }}?file={{asset('img/blog/doc')}}/{{ $blog->id . '.pdf'}}'
                        width='100%'
                        height = '300'
                        >
                    </iframe>
                    <a class="btn btn-link" target="_blank" href="{{ asset('img/blog/doc') }}/{{ $blog->id }}.pdf">abrir documento pdf</a>
                    <a href="{{ route('blog.download', $blog->id) }}" class="btn btn-success btn-sm">descargar documento pdf</a>
                    
                </div>
                <div class="col-md-6">
                    <p>{{ $blog->contenido }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 font-italic text-muted">
                     <strong>fecha:</strong>  {{ $blog->created_at->format('d/m/Y') }} |
                     <strong>ref:</strong>  {{ $blog->referencia }} |
                     <strong>autor:</strong>  {{ $blog->autor }} 
                </div>
            </div>
    </div>
</div>

@if (isset($blog))


<div class="row">
    <div class="col-md-12">
        <div class="row justify-content-center">
            @if (Auth::user()!=null)
                @if (Auth::user()->hasRole('admin'))
                    <a class="btn btn-warning" href="{{ route('blog.edit', $blog->id) }}">Editar</a>
                    &nbsp;

                    @if ($blog->estado == 1)
                        {!! Form::open(['route'=>['blog.update', $blog->id]]) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('estado', '0') !!}
                        {!! Form::submit('Dar de baja', ['class' => 'btn btn-danger btn-update']) !!}
                        {!! Form::close() !!}
                    @endif

                    &nbsp;

                    @if ($blog->estado == 0)
                        {!! Form::open(['route'=>['blog.update', $blog->id]]) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        {!! Form::hidden('estado', '1') !!}
                        {!! Form::submit('Dar de alta', ['class' => 'btn btn-success btn-update']) !!}
                        {!! Form::close() !!}
                    @endif
                @endif
            @endif

        </div>
    </div>
</div>
<br>
@endif
