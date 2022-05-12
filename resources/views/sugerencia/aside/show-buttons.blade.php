<div class="float-right">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('respuestasugerencia.createBySugerencia_id', $sugerencia->id) }}" class="btn btn-success">Responder</a>
        <a
            href="#"
            class="btn btn-success"
            data-bs-toggle="modal"
            data-bs-target="#deleteSugerenciaModal{{ $sugerencia->id }}"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Eliminar sugerencia"
        >
            Eliminar
        </a>
        @include('sugerencia.aside.delete-modal')
        <a href="{{ route('sugerencia.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>
