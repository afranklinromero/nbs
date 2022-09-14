<!-- Modal Eliminar-->
<div class="modal fade" id="deletePreguntaModal{{ $pregunta->id }}" tabindex="-1" role="dialog" aria-labelledby="deletePreguntaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-danger">
            <h5 class="modal-title" id="deletepreguntaModalLabel">Eliminar registro</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body alert-light fs-6">
                Desea Eliminar la pregunta:<br>
                <span class="text-danger fw-bold" >{{ $pregunta->pregunta }}</span> ? <br>
            </div>
            <div class="modal-footer alert-danger">
                <form class="d-inline" method="POST" action="{{ route('pregunta.destroy', $pregunta->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Confirmar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </form>
            </div>
        </div>
    </div>
</div>