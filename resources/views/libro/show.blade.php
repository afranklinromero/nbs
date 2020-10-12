@extends('template')

@section('contenido')
<div class="container">
    <div class="card text-white mb-3" style="max-width: 32rem;">
        <div class="card-header">
            <p class="h4 text-success text-center"><i class="fas fa-eye">  </i> TIPO PRODUCTO</p>
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $tipoproducto->nombre }}</h5>
          <p class="card-text">
            <table class="table table-striped">
                    <tr>
                        <td scope="col" class="text-right bg-light font-weight-bold">Id: </td>
                        <td scope="col"> {{ $tipoproducto->id}}</td>
                    <tr>
                    <tr>
                        <td class="text-right bg-light font-weight-bold"><strong>Nombre: </strong> </td>
                        <td> {{ $tipoproducto->nombre}}</td>
                    <tr>
                    <tr>
                        <td class="text-right bg-light font-weight-bold"><strong>Fecha creación:</strong> </td>
                        <td> {{ $tipoproducto->created_at}}</td>
                    <tr>
                    <tr>
                        <td class="text-right bg-light font-weight-bold"><strong>Fehca modificación: </strong></td>
                        <td> {{ $tipoproducto->updated_at}}</td>
                    <tr>
                    <tr>
                        <td class="text-right bg-light font-weight-bold"><strong>Estado: </strong></td>
                        <td> {{ $tipoproducto->estado}}</td>
                    <tr>
                </tbody>
              </table>

            <a href="{{route ('libro.edit', $tipoproducto->id)}}"class="btn btn-warning mr-1"><i class="fas fa-edit"> </i> Editar </a>
            <a href="{{ url()->previous() }}" class="btn btn-info"><i class="fas fa-arrow-left">  </i> Volver</a>
        </p>
        </div>
      </div>

</div>

@endsection
