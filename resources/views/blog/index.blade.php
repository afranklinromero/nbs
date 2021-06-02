
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
                                    <p class="text-center">
                                        @if (Auth::user()!=null)
                                            @if (Auth::user()->hasRole('admin'))
                                                <a href="{{ route('blog.create') }}" class="btn btn-primary">Nuevo articulo</a>
                                                <br>
                                            @endif
                                        @endif
                                    </p>
                                    <p>
                                        <div class="row">
                                            <div class="col-md-12 mr-3 ml-3">
                                                {!! Form::open(['route'=>'blog.index', 'id'=>'form-blog-index', 'method' => 'GET']) !!}
                                                <div class="input-group mb-3">
                                                    <input id="titulo" name="titulo" value="{{ isset($titulo) ? $titulo : ''}}" type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
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
    <a id="articulo"><H2 class="text-danger text-center">ARTICULOS</H2></a>

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
                    @if (($i%6)==0 && $i>0)
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
                                    <a href="{{route('blog.show', $blog->id)}}"> <img class="imagen card-img-top" src="{{ asset('img/blog/'.$blog->id . '.' . $blog->ext) }}" alt=""></a>
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
                                                    <button type="submit" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal{{ $blog->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar articulo"><i class="far fa-trash-alt"></i></button>
                                                </p>


                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar articulo: {{ $blog->title }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Desea Eliminar el articulo?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form class="d-inline" method="POST" action="{{ route('blog.destroy', $blog->id) }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-primary">Confirmar</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

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
