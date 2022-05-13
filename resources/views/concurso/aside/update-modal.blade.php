<!-- Modal -->
<div class="modal fade" id="updateTemaconcursoModal{{ $temaconcurso->id }}" tabindex="-1" role="dialog" aria-labelledby="updateTemaconcursoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-danger">
            <h5 class="modal-title" id="updatetemaconcursoModalLabel">Dar de baja registro</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body alert-light fs-6">
                Desea dar de baja la olimpiada:<br>
                <span class="text-danger fw-bold" >{{ $temaconcurso->concurso->nombre }}</span>?<br>
            </div>
            <div class="modal-footer alert-danger">
                <form class="d-inline" method="POST" action="{{ route('concurso.update', $temaconcurso->concurso->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="estado" value="0">
                <button type="submit" class="btn btn-danger">Confirmar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </form>
            </div>
        </div>
    </div>
</div>
