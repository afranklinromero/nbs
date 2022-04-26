<p class="fs-5 fw-bold">Respuestas</p>
@foreach ($respuestasugerencias as $respuestasugerencia)
<div class="row">
    <div class="col form-group">
        <div class="card" >
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted ">{{$respuestasugerencia->created_at->format('d/M/Y')}}</h6>
            <p class="card-text">{{$respuestasugerencia->respuesta}}</p>
            <p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $respuestasugerencia->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar Respuesta">Eliminar</a>
            </p>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $respuestasugerencia->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar respuesta: {{ $respuestasugerencia->id }}</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            Desea Eliminar la respuesta?
                        </div>
                        <div class="modal-footer">
                            <form class="d-inline" method="POST" action="{{ route('respuestasugerencia.destroy', $respuestasugerencia->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endforeach
