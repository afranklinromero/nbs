<div class="card mx-auto">
    <div class="card-header text-white bg-primary">
        <h3> Ronda terminada </h3>

    </div>
    <div class="card-body" style="background-image: url('{{ asset('img/fonco-concurso3.png') }}');">
        <h1 class="display-1 text-center">
            {{ $participacion->correctas }}/{{ $participacion->concurso->configuracion->nropreguntas }}
            @if ($participacion->correctas == 0)
                <img src="{{ asset('img/puntos/5.png') }}" alt="">
            @elseif ($participacion->puntos >= 1 && $participacion->puntos <= 4)
                <img src="{{ asset('img/puntos/4.png') }}" alt="">
            @elseif ($participacion->puntos >= 5 && $participacion->puntos <= 7)
                <img src="{{ asset('img/puntos/3.png') }}" alt="">
            @elseif ($participacion->puntos >= 8 && $participacion->puntos <= 9)
                <img src="{{ asset('img/puntos/2.png') }}" alt="">
            @elseif ($participacion->puntos >= 10)
                <img src="{{ asset('img/puntos/1.png') }}" alt="">
            @endif
        </h1>
		<div class="alert alert-primary">
        <table class="table">
        	<tr>
        		<td width='50%' class="text-right"><strong>Tiempo:</strong> </td>
        		<td>{{ $participacion->tiempo }}</td>
        	</tr>
        	<tr>
        		<td width='50%' class="text-right"><strong>Respuestas correctas:</strong></td>
        		<td>{{ $participacion->correctas }}</td>
        	</tr>
            <!--
        	<tr>
        		<td width='50%' class="text-right"><strong>Respuestas incorrectas:</strong></td>
        		<td>{{ $participacion->incorrectas }}</td>
			</tr>
			<tr>
        		<td width='50%' class="text-right"><strong>Puntos por respuesta:</strong></td>
        		<td>{{ $participacion->concurso->configuracion->puntosporrespuesta }}</td>
        	</tr>
            -->
        	<tr>
        		<td width='50%' class="text-right"><strong>Puntos:</strong></td>
        		<td>{{ $participacion->puntos }}</td>
			</tr>
			<tr>
        		<td width='50%' class="text-right"><strong>Total puntos:</strong></td>
        		<td>{{ $clasificacion->puntos }}</td>
        	</tr>
		</table>
	</div>
	<div class="alert alert-primary">
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
					@if ($nro<=10)
                        @if (Auth::user()->id == $clasificacion->usuario->id)
                            <tr class="bg-primary">
                                <td> <span class="text-white">{{ $nro }}° </span></td>
                                <td> <span class="text-white">{{ $clasificacion->usuario->name }} </span></td>
                                <td> <span class="text-white">{{ $clasificacion->puntos }} </span></td>
                            </tr>
                        @else
                            <tr>
                                <td> {{ $nro }}° </td>
                                <td> {{ $clasificacion->usuario->name }} </td>
                                <td> {{ $clasificacion->puntos }} </td>
                            </tr>
                        @endif
                    @endif
					@php
						$nro++;
					@endphp

				@endforeach
			</tbody>
		</table>
	</div>
		<div class="text-center">
			<a class="btn btn-primary rounded-pill fs-5" href="{{route('concurso.jugar', $participacion->concurso_id) }}">Volver a jugar</a>
			<a class="btn btn-danger rounded-pill fs-5" href="{{route('concurso.index') }}">Salir</a>
		</div>

    </div>
</div>
