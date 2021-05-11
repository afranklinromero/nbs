@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <section>
    <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-7">
                        <h2><a href="{{ route('publicidad.index') }}" style="color: #d86304">PUBLICIDAD NORMAS BOLIVIANAS DE SALUD</a></h2>
                        <br>
                        <h4 class="mr-3 ml-3">hola....Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae hic soluta, dolores maiores fugit sit nobis eaque alias. Cum ullam exercitationem beatae est illum, sit repellat voluptates ipsa temporibus. Est?</h4>
                        <br>
                        <p class="text-center">
                            @if (Auth::user()!=null)
                                @if (Auth::user()->hasRole('admin'))
                                    <a href="{{ route('publicidad.create') }}" class="btn btn-warning">Nueva publicidad</a>
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
                    <div class="col-5  mt-0">
                        <img class="rounded" src="{{ asset('img/publicidadlogo.png') }}" alt="" width="450">
                    </div>
                </div>
                </div>
            </div>
    </div>
    <br>
    <br>

</section>
    <H2 class="text-center" style="color: #d86304">LISTA PUBLICIDADES</H2>
    <div class="row">
        @foreach ($publicidades as $i=>$publicidad)
            <div class="col-sm-12 col-md-4">
                <div>
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/publicidad/'.$publicidad->id . '.png') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('publicidad.show', $publicidad->id)}}" style="color: #d86304" data-toggle="modal" data-target="#exampleModal{{ $publicidad->id }}">
                                    {{ $publicidad->titulo }}
                                </a>
                            </h5>
                            <p class="card-text">{{ substr($publicidad->contenido, 0, 128) }}...</p>
                            <p class="text-muted fst-italic">
                                <small> {{ $publicidad->created_at->format('d/m/Y') }}</small>
                            </p>
                            @if (Auth::user()!=null)
                                @if (Auth::user()->hasRole('admin'))
                                    <p class="float-right">
                                        <a href="{{ route('publicidad.edit', $publicidad->id) }}" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar articulo"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-secondary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar articulo"><i class="far fa-trash-alt"></i></a>
                                    </p>
                                @endif
                            @endif
                        </div>
                    </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $publicidad->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h3 class="modal-title text-success" id="exampleModalLabel">
                                {{ $publicidad->titulo }}
                            </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                @include('publicidad.aside.show')
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
        {{ $publicidades->links() }}
    </div>

</div>
@endsection

@section('scriptlocal')



<script>

</script>
