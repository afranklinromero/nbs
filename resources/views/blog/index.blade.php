@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <section>
    <div class="row">

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-round" src="{{ asset('img/bloglogo.jpg') }}" alt="">
                      </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-primary"><a href="{{ route('blog.index') }}">BLOGS NORMAS BOLIVIANAS DE SALUD</a></h2>
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
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                {!! Form::open(['route'=>'blog.index', 'id'=>'form-blog-index', 'method' => 'GET']) !!}
                                                <div class="input-group mb-3">

                                                    <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
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
    <H2 class="text-danger text-center">ARTICULOS</H2>
    <div class="row">
        @php
            $j = 0;
            $n = sizeof($publicidades);
        @endphp
        @foreach ($blogs as $i=>$blog)
            @if (($i>0) && ($i%6)==0)
                @if ($j < $n)
                    <div class="col-12">
                        <p class="text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Publicidad auspiciadores">
                            <a href="https://bit.ly/3b53H2K">
                                <img src="{{ asset('img/publicidad/'.$publicidades[$j]->id.'.png') }}" class="img-fluid rounded" alt="">
                            </a>
                        </p>
                    </div>
                    @php $j++; @endphp
                @endif
            @endif
            <div class="col-sm-12 col-md-4">
                <div>
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/blog/'.$blog->id . '.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('blog.show', $blog->id)}}" class="text-success" data-toggle="modal" data-target="#exampleModal{{ $blog->id }}">
                                    {{ $blog->titulo }}
                                </a>
                            </h5>
                            <p class="card-text">{{ substr($blog->contenido, 0, 128) }}...</p>
                            <p class="text-muted fst-italic">
                                <small> {{ $blog->created_at->format('d/m/Y') }}</small>
                            </p>
                            @if (Auth::user()!=null)
                                @if (Auth::user()->hasRole('admin'))
                                    <p class="float-right">
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar articulo"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-secondary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar articulo"><i class="far fa-trash-alt"></i></a>
                                    </p>
                                @endif
                            @endif
                        </div>
                    </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h3 class="modal-title text-success" id="exampleModalLabel">
                                {{ $blog->titulo }}
                            </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                @include('blog.aside.show')
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
            </div>
            </div>
        @endforeach

    </div>
    <div class="text-center">
        {{ $blogs->links() }}
    </div>

</div>
@endsection

@section('scriptlocal')



<script>

</script>
