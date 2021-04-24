@extends('layouts.nbs.app')

@section('contenido')
<div class="container">
    <h2 class="text-primary">BLOGS</h2>
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-sm-12 col-md-4">
            <div>
                <div class="card">
                    <img class="card-img-top" src="https://loremflickr.com/640/360" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $blog->titulo }}</strong></h5>
                        <p class="card-text">{{ substr($blog->contenido, 0, 128) }}...</p>
                    </div>
                </div>
                <br>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('scriptlocal')



<script>

</script>
