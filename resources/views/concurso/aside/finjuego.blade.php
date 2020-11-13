<div class="card mx-auto">
    <div class="card-header text-white bg-success">
        <h3> RONDA TERMINADA </h3>

    </div>
    <div class="card-body">
        <h1 class="display-1 text-center">{{ $participacion->correctas }}%</h1>
        <table class="table">
        	<tr>
        		<td>Tiempo:</td>
        		<td>{{ $participacion->tiempo }}</td>
        	</tr>
        	<tr>
        		<td>Respuestas correctas:</td>
        		<td>{{ $participacion->correctas }}</td>
        	</tr>
        	<tr>
        		<td>Respuestas incorrectas:</td>
        		<td>{{ $participacion->incorrectas }}</td>
        	</tr>
        	<tr>
        		<td>Puntos:</td>
        		<td>{{ $participacion->puntos }}</td>
        	</tr>
		</table>
		<a class="btn btn-primary" href="{{ route('concurso.jugar', $participacion->concurso_id) }}">Volver a jugar</a>
    </div>
</div>
