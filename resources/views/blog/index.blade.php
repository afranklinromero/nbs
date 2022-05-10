
@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <section>
    <div class="row">

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="{{ route('blog.index') }}">
                            <img class="img-round img-fluid" src="{{ asset('img/bloglogo.jpg') }}" alt="">
                        </a>
                      </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2><a class="text-success" href="{{ route('blog.index') }}">BLOGS NORMAS BOLIVIANAS DE SALUD</a></h2>
                                    <br>
                                    <h4 class="mr-3 ml-3">Blog de articulos sobre normas de bolivianas de salud, y medicina en gral.</h4>
                                    <br>

                                    <p>
                                        <div class="row">
                                            <div class="col-md-12 mr-3 ml-3">
                                                {!! Form::open(['route'=>'blog.index', 'id'=>'form-blog-index', 'method' => 'GET']) !!}
                                                <div class="input-group mb-3">
                                                    <input id="titulo" name="titulo" value="{{ isset($titulo) ? $titulo : ''}}" type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <a class="btn btn-success" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass mt-1"></i></a>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    <br>
    <br>

</section>
    <a id="articulo"></a>
    <div class="row">
        <div class="col-md-6">
            <p class="h2 text-success">ARTICULOS</p>
        </div>
        <div class="col-md-6">
            <p class="text-end">
            @if (Auth::user()!=null)
                @if (Auth::user()->hasRole('admin'))
                    <a href="{{ route('blog.create') }}" class="btn btn-success">Nuevo articulo</a>
                    <br>
                @endif
            @endif
            </p>
        </div>
    </div>
    <hr class="bg-success">

    @if (isset($blogs) && sizeof($blogs) > 0)
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                &times;
            </button>
            <p> se encontraron <strong>{{$blogs->total()}}</strong> resultados, pagina <strong>{{$blogs->currentPage()}}</strong> de <strong>{{$blogs->lastPage()}} </strong></p>
        </div>
        <div class="row">
            @php
                $j = 0;
                $n = sizeof($publicidades);
            @endphp
            @foreach ($blogs as $i=>$blog)
                    @if (($i%6)==0)
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                @include('publicidad.aside.carrousel')
                                <br>
                            </div>
                            <div class="col-md-3"></div>
                        @endif
                <div class="col-sm-12 col-md-4">
                    <div>
                        <div class="card">
                            <div class="contenedorimg">
                                @if (isset($blog->imagen))
                                    <a href="{{route('blog.show', $blog->id)}}"> 
                                        <img class="imagen card-img-top" src="{{ asset('storage/files/blog/'.$blog->id . '/' . $blog->imagen) }}" alt="error img">
                                    </a>
                                @else
                                    <img class="imagen card-img-top" src="{{ asset('img/default.png') }}" alt="">
                                @endif

                            </div>

                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{route('blog.show', $blog->id)}}" class="text-success">
                                        {{ $blog->titulo }}
                                    </a>
                                </h5>
                                <p class="card-text">{{ substr($blog->contenido, 0, 128) }}...</p>
                                <p class="text-muted fst-italic">
                                    <small> {{ $blog->created_at->format('d/m/Y') }}</small> <br>
                                    @if (Auth::user()!=null)
                                        @if (Auth::user()->hasRole('admin'))
                                            <strong>id:</strong> <small> {{ $blog->id }}</small><br>
                                            <strong>autor:</strong> <small> {{ $blog->autor }}</small><br>
                                        @endif
                                    @endif
                                </p>
                                @if (Auth::user()!=null)
                                    @if (Auth::user()->hasRole('admin'))

                                        <p class="float-right">
                                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver articulo"><i class="far fa-eye"></i></a>
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar articulo"><i class="far fa-edit"></i></a>
                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#deleteBlogModal{{ $blog->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar articulo">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </p>

                                        @include('blog.aside.delete-modal')

                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>

                    <br>
                </div>
            @endforeach
            </div>

            <div class="text-center">
                {{ $blogs->links() }}
            </div>

        </div>
    @else
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                &times;
            </button>
            No se encontraron resultados...
        </div>
    @endif
@endsection

@section('scriptlocal')



<script>

</script>
