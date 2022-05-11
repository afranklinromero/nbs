<div class="float-right">
    <div class="btn-group" role="group" aria-label="Basic example">

        @if (Auth::check() && Auth::user()->hasRole('admin'))
            <a href="{{ route('publicidad.create') }}" class="btn btn-success">Nuevo</a>
            <a href="{{ route('publicidad.edit', $publicidad->id) }}" class="btn btn-success">Editar</a>
            <a 
                href="{{ route('publicidad.create') }}" 
                class="btn btn-success" 
                data-bs-toggle="modal" 
                data-bs-target="#deletePublicidadModal{{ $publicidad->id }}" 
                data-bs-toggle="tooltip" 
                data-bs-placement="top" 
                title="Eliminar articulo"
                >
                Eliminar
            </a>

            @include('publicidad.aside.delete-modal')

        @endif
        <a href="{{ route('publicidad.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>
