<div class="float-right">
    <div class="btn-group" role="group" aria-label="Basic example">

        @if (Auth::check() && Auth::user()->hasRole('admin'))
            <button  type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('concurso.index') }}" class="btn btn-primary">Cancelar</a>
        @endif

    </div>
</div>
