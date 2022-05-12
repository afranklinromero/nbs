<p class="fs-5 fw-bold">Respuestas</p>
@foreach ($respuestasugerencias as $respuestasugerencia)
<div class="row">
    <div class="col form-group">
        <div class="card" >
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted ">
                Respondido por: {{ $respuestasugerencia->user->name }}
                <span class="float-end"> {{$respuestasugerencia->created_at->format('d M Y')}}</span> 
              </h6>
              <p class="card-text">{{$respuestasugerencia->respuesta}}</p>
              <!-- Button Modal -->
              <a 
                href="#" 
                class="link-success" 
                data-bs-toggle="modal" 
                data-bs-target="#deleteRespuestasugerenciaModal{{ $respuestasugerencia->id }}" 
                data-bs-toggle="tooltip" 
                data-bs-placement="top" 
                title="Eliminar respuesta sugerencia"
                >
                Eliminar
              </a>
              <!-- Modal -->
              @include('respuestasugerencia.aside.delete-modal')
            </div>
        </div>
      </div>
  </div>
@endforeach
