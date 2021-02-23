@include('pregunta.aside.info')
<h3>{{$pregunta->subject}}</h3>
<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <h4 class="me-md-2"><strong>{{$pregunta->pregunta}}</strong></h4>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <p class="text-muted"><strong>Tema </strong>{{ $pregunta->tema->nombre }}</p> |
            <p class="text-muted"><strong>Autor </strong>{{ $pregunta->tema->nombre }}</p>
        </div>
    </div>
</div>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">Respuesta</th>
                <th scope="col">Correcto?</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($pregunta->respuestas as $key => $item)
                    <tr class = {{ ($item->escorrecta==1)?'table-success':"" }}>
                        <th scope="row"> {{$key+1}}</th>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->respuesta }}</td>
                        <td>
                            @if ($item->escorrecta==1)
                                <i class='text-success fas fa-check-circle'></i>
                            @else
                                <i class="text-danger fas fa-times-circle"></i>
                            @endif
                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>

<div class="row">
    <div class="col">
        <a href="{{ route('pregunta.index') }}" class="btn btn-warning text-white index">Editar</a>
        <a href="{{ route('pregunta.index') }}" class="btn btn-success index">Volver</a>
    </div>
</div>

