@include('blog.aside.info')
@include('blog.aside.error')
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
                    @if (isset($blog->imagen))
                        <img class='img-fluid rounded float-left mr-3 mb-3' src="{{asset('img/blog/'. $blog->id. '.' . $blog->ext)}}" alt="" width="100%">    
                    @endif
                    
                    @if (isset($blog->youtube))
                        <iframe width='100%' height="300"  src=»//www.youtube.com/embed/RAGnHADKIIM» frameborder=»0″ allowfullscreen></iframe>    
                    @endif
                    
                    @if (isset($blog->documentopdf))
                        <iframe
                            class='pdfembed'
                            src= '{{ asset('pdfjs/web/viewer.html') }}?file={{asset('img/blog/doc')}}/{{ $blog->id . '.pdf'}}'
                            width='100%'
                            height = '300'
                            >
                        </iframe>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-primary btn-sm" target="_blank" href="{{ asset('img/blog/doc') }}/{{ $blog->id }}.pdf">abrir documento pdf</a>
                            <a class="btn btn-success btn-sm" href="{{ route('blog.download', $blog->id) }}" >descargar documento pdf</a>    
                        </div>
                    @endif
                    
                    
                </div>
                <div class="col-md-6">
                    <p>{{ $blog->contenido }}</p>
                </div>
            </div>
            
    </div>
</div>
<div class="row">
    <div class="col-md-12 font-italic text-muted float-center">
         <strong>fecha:</strong>  {{ $blog->created_at->format('d/m/Y') }} |
         <strong>ref:</strong>  {{ $blog->referencia }} |
         <strong>autor:</strong>  {{ $blog->autor }} |
         <strong>estado:</strong> <span class={{($blog->estado==1)?'text-success':'text-danger'}}>{{ ($blog->estado==1)?'activo':'anulado' }} </span> 
    </div>
</div>

@if (isset($blog))
    <div class="row">
        <div class="col-md-12">
            <div class="row justify-content-center">
                @if (Auth::user()!=null)
                    @if (Auth::user()->hasRole('admin'))
                        {!! Form::open(['route'=>['blog.altabaja', $blog->id]]) !!}
                            {!! Form::hidden('_method', 'PUT') !!}
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-warning" href="{{ route('blog.edit', $blog->id) }}">Editar</a>
                                @if ($blog->estado == 1)
                                    {!! Form::hidden('estado', '0') !!}
                                    {!! Form::submit('Dar de baja', ['class' => 'btn btn-danger btn-update']) !!}
                                @endif
                                @if ($blog->estado == 0)
                                    {!! Form::hidden('estado', '1') !!}
                                    {!! Form::submit('Dar de alta', ['class' => 'btn btn-success btn-update']) !!}
                                @endif
                            </div>
                        {!! Form::close() !!}
                    @endif
                @endif
                
            </div>
        </div>
    </div>
@endif
