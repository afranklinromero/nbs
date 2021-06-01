<div class="card mx-auto">
    <div class="card-header text-white bg-success">
        <h3> Ronda terminada </h3>

    </div>
    <div class="card-body">
        <h1 class="display-1 text-center">{{ $participacion->correctas }}/{{ $participacion->concurso->configuracion->nropreguntas }}</h1>
		<div class="alert alert-success">
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
        		<td width='50%' class="text-right"><strong>Puntos por respuesta:</strong></td>
        		<td>{{ $participacion->concurso->configuracion->puntosporrespuesta }}</td>
        	</tr>
        	<tr>
        		<td width='50%' class="text-right"><strong>Puntos:</strong></td>
        		<td>{{ $participacion->puntos }}</td>
			</tr>
			<tr>
        		<td width='50%' class="text-right"><strong>Puntos Acumulados:</strong></td>
        		<td>{{ $clasificacion->puntos }}</td>
        	</tr>
		</table>
	</div>
	<div class="alert alert-success">
		<p class="card-text"><strong class="text-center">Clasificación top 10</strong></p>
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
					@if (Auth::user()->id == $clasificacion->usuario->id)
					<tr class="bg-success text-white">
						<td> {{ $nro }}° </td>
						<td> {{ $clasificacion->usuario->name }} </td>
						<td> {{ $clasificacion->puntos }} </td>
					</tr>	
					@endif
					@if ($nro<=10)
					<tr>
						<td> {{ $nro }}° </td>
						<td> {{ $clasificacion->usuario->name }} </td>
						<td> {{ $clasificacion->puntos }} </td>
					</tr>					
					@endif
					@php
						$nro++;
					@endphp
				
				@endforeach
			</tbody>
		</table>
	</div>
		<div class="text-center">
			<a class="btn btn-success" href="{{route('concurso.jugar', $participacion->concurso_id) }}">Volver a jugar</a>
			<a class="btn btn-danger" href="{{route('concurso.index') }}">Salir</a>
		</div>
		
    </div>
</div>
