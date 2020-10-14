@extends('layouts.app')

@section('contenido')
<div class="container">
    <p class="h4 text-success text-center">

    </p>

    @include('libro.aside.asaide')
    @include('libro.aside.info')
    <ul class="navbar-nav mr-auto">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha creacion</th>
            <th scope="col">Fecha modificacion</th>
            <th scope="col">Estado</th>
            <th> <a href="{{ route('libro.create') }}" class="btn btn-primary"><i class="far fa-file"></i> Nuevo</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->id  }} </td>
                <td>{{ $libro->titulo }}</td>
                <td><img src="{{ asset('tapas/') }}/{{ $libro->tapa}}" width="80" alt="" srcset=""></td>
                <td>{{ $libro->updated_at }}</td>
                <td>{{ $libro->estado }}</td>
                <td>
                    <a href="{{route ('libro.show', $libro->id) }}" class="btn btn-success btn-sm d-inline"><i class="fas fa-eye"></i></a>
                    <a href="{{route ('libro.edit', $libro->id) }}" class="btn btn-warning btn-sm d-inline text-white"><i class="fas fa-edit"></i></a>
                    <form action="{{route ('libro.destroy', $libro->id) }}" method="POST" class="d-inline">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $libros->links() }}
</div>

@endsection
