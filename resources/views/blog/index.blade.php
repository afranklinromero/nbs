@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h2 class="text-primary"><a href="{{ route('blog.index') }}">BLOGS</a>
    @if (Auth::user()!=null)
        @if (Auth::user()->hasRole('admin'))
            <a href="{{ route('blog.create') }}" class="btn btn-primary float-right">Nuevo articulo</a>
            <br>
        @endif
    @endif
</h2>
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-sm-12 col-md-4">
            <div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/blog') }}/{{$blog->id}}.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{route('blog.show', $blog->id)}}" class="text-success" data-toggle="modal" data-target="#exampleModal{{ $blog->id }}">
                                {{ $blog->titulo }}
                            </a>
                        </h5>
                        <p class="card-text">{{ substr($blog->contenido, 0, 128) }}...</p>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h3 class="modal-title text-success" id="exampleModalLabel">
                                {{ $blog->titulo }}
                            </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                @include('blog.aside.show')
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
            </div>
            </div>
        @endforeach

    </div>
    {{$blogs->links()}}
</div>
@endsection

@section('scriptlocal')



<script>

</script>
