@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="card text-white mb-3" style="max-width: 32rem;">
        <div class="card-header">
            <p class="h4 text-success text-center"><i class="fas fa-eye">  </i> Libro</p>
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $libro->titulo }}</h5>
          <p class="card-text">
            <table class="table table-striped">
                    <tr>
                        <td scope="col" class="text-right bg-light font-weight-bold">Id: </td>
                        <td scope="col"> {{ $libro->id}}</td>
                    <tr>
                    <tr>
                        <td class="text-right bg-light font-weight-bold"><strong>Titulo: </strong> </td>
                        <td> {{ $libro->titulo}}</td>
                    <tr>
                    <tr>
                        <td class="text-right bg-light font-weight-bold"><strong>Fecha creación:</strong> </td>
                        <td> {{ $libro->created_at}}</td>
                    <tr>
                    <tr>
                        <td class="text-right bg-light font-weight-bold"><strong>Fecha modificación: </strong></td>
                        <td> {{ $libro->updated_at}}</td>
                    <tr>
                    <tr>
                        <td class="text-right bg-light font-weight-bold"><strong>Estado: </strong></td>
                        <td> {{ $libro->estado}}</td>
                    <tr>
                </tbody>
              </table>

            <a href="{{route ('libro.edit', $libro->id)}}"class="btn btn-warning mr-1"><i class="fas fa-edit"> </i> Editar </a>
            <a href="{{ url()->previous() }}" class="btn btn-info"><i class="fas fa-arrow-left">  </i> Volver</a>
        </p>
        </div>
      </div>

</div>

@endsection
