<div class="card mx-auto">
    <div class="card-header text-white bg-success">
        <h3> RONDA TERMINADA </h3>

    </div>
    <div class="card-body">
        <h1 class="display-1 text-center">{{ $participacion->correctas }}/{{ $participacion->concurso->configuracion->nropreguntas }}</h1>
        <table class="table">
        	<tr>
        		<td width='50%' class="text-right"><strong>Tiempo:</strong> </td>
        		<td>{{ $participacion->tiempo }}</td>
        	</tr>
        	<tr>
        		<td width='50%' class="text-right"><strong>Respuestas correctas:</strong></td>
        		<td>{{ $participacion->correctas }}</td>
        	</tr>
        	<tr>
        		<td width='50%' class="text-right"><strong>Respuestas incorrectas:</strong></td>
        		<td>{{ $participacion->incorrectas }}</td>
        	</tr>
        	<tr>
        		<td width='50%' class="text-right"><strong>Puntos:</strong></td>
        		<td>{{ $participacion->puntos }}</td>
			</tr>
			<tr>
        		<td width='50%' class="text-right"><strong>Puntos Clasificacion:</strong></td>
        		<td>{{ $clasificacion->puntos }}</td>
        	</tr>
		</table>
		<p class="card-text"><small class="text-muted">Clasificación top 10</small></p>
		<table class="table table-sm table-striped">
			<thead>
				<tr>
				<th scope="col">Puesto</th>
				<th scope="col">Nombre</th>
				<th scope="col">Puntos</th>
				</tr>
			</thead>
			<tbody>
				@php
					$nro = 1;
				@endphp
				@foreach($participacion->concurso->clasificaciones->sortByDesc('puntos') as $clasificacion)
				<tr>
					@if ($nro<=10)
						<td> {{ $nro }}° </td>
						<td> {{ $clasificacion->usuario->name }} </td>
						<td> {{ $clasificacion->puntos }} </td>
					@endif

					@php
						$nro++;
					@endphp
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			<a class="btn btn-primary" href="{{ route('concurso.jugar', $participacion->concurso_id) }}">Volver a jugar</a>
		</div>
		
    </div>
</div>
