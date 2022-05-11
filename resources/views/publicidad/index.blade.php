@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <section>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img/publicidadlogo2.png') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="p-3"><a href="{{ route('publicidad.index') }}" style="color: #d86304">PUBLICIDAD NORMAS BOLIVIANAS DE SALUD</a></h2>
                        <h4 class="mr-3 ml-3">Administración de anuncios publicitarios en la pagina de Normas Bolivianas de Salud</h4>
                        <br>
                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::open(['route'=>'publicidad.index', 'id'=>'form-publicidad-index', 'method' => 'GET']) !!}
                                <div class="input-group m-3">
                                    <input id="titulo" name="titulo" value="{{ isset($titulo) ? $titulo : ''}}" type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline text-white" style="background-color: #d86304" type="submit" id="button-addon2">Buscar</button>
                                    </div>

                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="row">
        <div class="col-md-6">
            <p class="h2 fs-bold" style="color: #d86304">ANUNCIOS PUBLICITARIOS</p>
        </div>
        <div class="col-md-6">
            <p class="text-end">
            @if (Auth::user()!=null)
                @if (Auth::user()->hasRole('admin'))
                    <a href="{{ route('publicidad.create') }}" class="btn text-white"  style="background-color: #d86304">Nueva publicidad</a>
                    <br>
                @endif
            @endif
            </p>
        </div>
    </div>
    <div class="row">
        @foreach ($publicidades as $i=>$publicidad)
            <div class="col-sm-12 col-md-4">
                <div>
                    <div class="card">
                        <a href="{{route('publicidad.show', $publicidad->id)}}"><img class="card-img-top" src="{{ asset('storage/files/publicidad/'.$publicidad->id . '/'.$publicidad->imagen) }}" alt=""></a>
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
                                    <p class="text-muted fst-italic">
                                        <strong>fin:</strong> <small>{{ $publicidad->fechafin->format('d/m/Y') }}</small><br>
                                        <strong>lugar:</strong> {{ $publicidad->lugar }}</small><br>
                                        <strong>estado:</strong> <span class="{{ ($publicidad->estado==1) ? ' text-success' : ' text-danger' }} ">{{ $publicidad->estado==1? 'activo': 'inactivo' }}</span><br>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                @if (Auth::user()!=null)
                                    @if (Auth::user()->hasRole('admin'))
                                        <p class="float-right">
                                            <a href="{{ route('publicidad.show', $publicidad->id) }}" class="btn btn-sm text-white" style="background-color: #d86304" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver anuncio publicitario"><i class="far fa-eye"></i></a>
                                            <a href="{{ route('publicidad.edit', $publicidad->id) }}" class="btn btn-sm text-white" style="background-color: #d86304" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar anuncio publicitario"><i class="far fa-edit"></i></a>

                                            <a type="button" style="background-color: #d86304" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#deletePublicidadModal{{ $publicidad->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar articulo">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </p>
                                        @include('publicidad.aside.delete-modal')
                                    @endif
                                @endif
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
