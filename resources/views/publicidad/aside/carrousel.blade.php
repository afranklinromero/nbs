<div id="carouselExampleInterval" class="carousel slide carousel-fade m-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($publicidades as $i=>$publicidad)
            @if ($i==0)
                <div class="carousel-item active" data-bs-interval="5000">
                    <a target="_blank" href="{{$publicidad->link}}"><img src="{{asset('storage/files/publicidad/'.$publicidad->id.'/'.$publicidad->imagen)}}" class="d-block w-100 rounded" alt="..."></a>
                </div>
            @else
                <div class="carousel-item" data-bs-interval="5000">
                    <a target="_blank" href="{{$publicidad->link}}"><img src="{{asset('storage/files/publicidad/'.$publicidad->id.'/'.$publicidad->imagen)}}" class="d-block w-100 rounded" alt="..."></a>
                </div>
            @endif
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>
