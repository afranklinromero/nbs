<!-- Modal -->
<div class="modal fade" id="aprobarPreguntaModal{{ $pregunta->id }}" tabindex="-1" role="dialog" aria-labelledby="aprobarPreguntaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-success">
            <h5 class="modal-title" id="aprobarPreguntaModalLabel">Aprobar pregunta</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body alert-light fs-6">
                Desea aprobar la pregunta:<br>
                <span class="text-success fw-bold" >{{ $pregunta->pregunta }}</span> ? <br>
            </div>
            <div class="modal-footer alert-success">
                <form class="d-inline" method="POST" action="{{ route('pregunta.update', $pregunta->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="estado" value="1">
                    <button type="submit" class="btn btn-success">Confirmar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </form>
            </div>
        </div>
    </div>
</div>
