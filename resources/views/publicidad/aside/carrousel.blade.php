<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($publicidades as $i=>$publicidad)
            @if ($i==0)
                <div class="carousel-item active" data-interval="2000">
                    <a target="_blank" href="{{$publicidad->link}}"><img src="{{asset('img/publicidad')}}/{{$publicidad->id}}.png" class="d-block w-100" alt="..."></a>
                </div>        
            @else
                <div class="carousel-item" data-interval="2000">
                    <a target="_blank" href="{{$publicidad->link}}"><img src="{{asset('img/publicidad')}}/{{$publicidad->id}}.png" class="d-block w-100" alt="..."></a>
                </div>
            @endif
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>