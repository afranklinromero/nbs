@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <section>
    <div class="row">

            <div class="card">
                <div class="card-body" style="padding: 0">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="p-3"><a href="{{ route('publicidad.index') }}" style="color: #d86304">PUBLICIDAD NORMAS BOLIVIANAS DE SALUD</a></h2>
                            <h4 class="mr-3 ml-3">Administración de anuncios publicitarios en la pagina de Normas Bolivianas de Salud</h4>
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
                                {!! Form::open(['route'=>'publicidad.index', 'id'=>'form-publicidad-index', 'method' => 'GET']) !!}
                                <div class="input-group m-3">
                                    <input id="titulo" name="titulo" value="{{ isset($titulo) ? $titulo : ''}}" type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                                </div>
                                {!! Form::close() !!}
                            </p>


                        </div>
                        <div class="col-5  mt-0">
                            <img class="rounded img-fluid float-right" src="{{ asset('img/publicidadlogo.png') }}" alt="" width="450">
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
                                <a href="{{route('publicidad.show', $publicidad->id)}}" style="color: #d86304">
                                    {{ $publicidad->titulo }}
                                </a>
                            </h5>
                            <p class="card-text">{{ substr($publicidad->contenido, 0, 128) }}...</p>
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-muted fst-italic float-left"><small>inicio: {{ $publicidad->fechaini->format('d/m/Y') }}</small></p>
                                    <p class="text-muted fst-italic float-right"><small> id: {{ $publicidad->id }}</small></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-muted fst-italic float-left"><small>fin: {{ $publicidad->fechafin->format('d/m/Y') }}</small></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                @if (Auth::user()!=null)
                                    @if (Auth::user()->hasRole('admin'))
                                        <p class="float-right">
                                            <a href="{{ route('publicidad.edit', $publicidad->id) }}" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar articulo"><i class="far fa-edit"></i></a>
                                            
                                            <a href="#" class="btn btn-sm btn-secondary"  data-toggle="modal" data-target="#exampleModal{{ $publicidad->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Baja anuncio publicitario"><i class="far fa-trash-alt"></i></a>
                                        </p>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $publicidad->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar anuncion publicitario: {{ $publicidad->title }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    Desea dar de baja el anuncio publicitario?
                                                </div>
                                                <div class="modal-footer">
                                                    <form class="d-inline" method="POST" action="{{ route('publicidad.update', $publicidad->id) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('PUT') }}
                                                        {!! Form::hidden('tipo','bloquear', null) !!}
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
