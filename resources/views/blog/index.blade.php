@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <section>
    <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-7">
                        <h2 class="text-primary"><a href="{{ route('blog.index') }}">BLOGS NORMAS BOLIVIANAS DE SALUD</a></h2>
                        <br>
                        <h4 class="mr-3 ml-3">hola....Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae hic soluta, dolores maiores fugit sit nobis eaque alias. Cum ullam exercitationem beatae est illum, sit repellat voluptates ipsa temporibus. Est?</h4>
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
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                              </div>
                        </p>


                    </div>
                    <div class="col-5">
                        <img class="img-round" src="{{ asset('img/bloglogo.jpg') }}" alt="">
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
        @foreach ($blogs as $i=>$blog)
        @if (($i>0) && ($i%6)==0)
                        <div class="col-12">
                            <p class="text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Publicidad auspiciadores">
                                <a href="https://bit.ly/3b53H2K">
                                    <img src="{{ asset('img/Asesoria Tesis en Salud - Nobosa.jpg') }}" class="img-fluid rounded" alt="">
                                </a>
                            </p>
                        </div>
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
                                    <a href="#" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar articulo"><i class="far fa-edit"></i></a>
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
