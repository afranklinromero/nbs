<div class="float-right">

        @if (Auth::check() && Auth::user()->hasRole('admin'))
            <a type="button" class="btn rounded-circle btn-{{ $color }}" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $temaconcurso->id }}">
                <i class="fa-solid fa-eye"></i>
            </a>
            <a href="{{ route('concurso.edit', $temaconcurso->concurso->id) }}" class="btn btn-{{ $color }} rounded-pill">
                <!--Editar-->
                <i class="fa-solid fa-pen"></i>
            </a>
            <a
                href="{{ route('temaconcurso.create') }}"
                class="btn btn-{{ $color }} rounded-pill"
                data-bs-toggle="modal"
                data-bs-target="#updateTemaconcursoModal{{ $temaconcurso->id }}"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Dar de baja registro"
                >
                <!--Eliminar-->
                <i class="fa-solid fa-trash"></i>
            </a>

            @include('concurso.aside.update-modal')

        @endif
        <!--<a href="{{ route('temaconcurso.index') }}" class="btn btn-primary rounded-pill">Volver</a>-->
</div>
