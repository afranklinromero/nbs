<div class="float-right">
    <div class="btn-group" role="group" aria-label="Basic example">

        @if (Auth::check() && Auth::user()->hasRole('admin'))
            <a href="{{ route('pregunta.create') }}" class="btn btn-success">Nuevo</a>
            <a href="{{ route('pregunta.edit', $pregunta->id) }}" class="btn btn-success">Editar</a>
            <a
                href="#"
                class="btn btn-success"
                data-bs-toggle="modal"
                data-bs-target="#aprobarPreguntaModal{{ $pregunta->id }}"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Eliminar registro"
                >
                Aprobar
            </a>
            <a
                href="#"
                class="btn btn-success"
                data-bs-toggle="modal"
                data-bs-target="#rechazarPreguntaModal{{ $pregunta->id }}"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Eliminar registro"
                >
                Rechazar
            </a>
            <a
                href="#"
                class="btn btn-success"
                data-bs-toggle="modal"
                data-bs-target="#deletePreguntaModal{{ $pregunta->id }}"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Eliminar registro"
                >
                Eliminar
            </a>

            @include('pregunta.aside.aprobar-modal')
            @include('pregunta.aside.rechazar-modal')
            @include('pregunta.aside.delete-modal')

        @endif
        <a href="{{ route('pregunta.index') }}" class="btn btn-primary" data-bs-dismiss="modal">Volver</a>
    </div>
</div>
