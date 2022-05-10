<!-- Modal -->
<div class="modal fade" id="deletePublicidadModal{{ $publicidad->id }}" tabindex="-1" role="dialog" aria-labelledby="deletePublicidadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert-danger">
            <h5 class="modal-title" id="deletePublicidadModalLabel">Eliminar articulo</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body alert-light fs-6">
                Desea Eliminar el articulo:<br>
                <span class="text-danger fw-bold" >{{ $publicidad->titulo }}</span> <br>
                del publicidad?
            </div>
            <div class="modal-footer alert-danger">
                <form class="d-inline" method="POST" action="{{ route('publicidad.destroy', $publicidad->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Confirmar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </form>
            </div>
        </div>
    </div>
</div>