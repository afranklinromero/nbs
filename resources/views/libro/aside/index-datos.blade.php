<table class="table">
    <tbody>
        @foreach($libros as $libro)
        <tr>
            <td>
                <img src="{{ asset('tapas/') }}/{{ $libro->tapa}}" class="rounded" width="100" alt="" srcset="">
            </td>
            <td>
            <p class="text-dark"> <strong>libro ›  </strong> <span class="text-secondary"> {{$libro->documentopdf}}</span> &nbsp; <strong>id: </strong>{{$libro->id }}</p>
                <h4 class="text-info"><a href="{{ route('libro.show', $libro->id) }}"> {{ $libro->titulo }}</a> </h4>
                <p class="text-muted">
                    <strong class="text-lowercase">serie › </strong> {{ $libro->serie}} <br>
                    <strong class="text-lowercase">lugar publicacion › </strong> {{ $libro->lugarpublicacion}}<br>
                    <strong class="text-lowercase">numero publicación › </strong> {{ $libro->nropublicacion}}<br>
                </p>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $libros->links() }} 