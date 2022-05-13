<!-- Modal -->
<div class="modal fade" id="showModal{{ $pregunta->id }}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="showModalLabel">
                VER PREGUNTA ID: {{ $pregunta->id }}
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                @include('pregunta.aside.show')
            </div>
            <div class="modal-footer">
                @include('pregunta.aside.show-buttons-modal')
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrarrrr</button>-->
            </div>
        </div>
    </div>
</div>
