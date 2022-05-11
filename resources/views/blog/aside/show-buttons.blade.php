<div class="float-right">
    <div class="btn-group" role="group" aria-label="Basic example">

        @if (Auth::check() && Auth::user()->hasRole('admin'))
            <a href="{{ route('blog.create') }}" class="btn btn-success">Nuevo</a>
            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-success">Editar</a>
            <a
                href="{{ route('blog.create') }}"
                class="btn btn-success"
                data-bs-toggle="modal"
                data-bs-target="#deleteBlogModal{{ $blog->id }}"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Eliminar articulo"
                >
                Eliminar
            </a>

            @include('blog.aside.delete-modal')

        @endif
        <a href="{{ route('blog.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>
