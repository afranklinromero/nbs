@include('publicidad.aside.info')
<!--<h3 class="text-success">{{$publicidad->titulo}}</h3>-->
<div class="row">
    <div class="col-md-12">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 text-justify">
                    <a href="{{$publicidad->link}}" target='_blank'><img class='img-fluid rounded float-left mr-3' src="{{asset('storage/files/publicidad/'. $publicidad->id. '/' .$publicidad->imagen)}}" width="50%" alt=""></a>
                    <p><strong >Contenido: </strong> {{ $publicidad->contenido }}</p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 m-3 alert alert-secondary">
                    <p>
                        <strong>Enlace:</strong>  {{ $publicidad->link }}<br>
                        <strong>Lugar:</strong>  {{ $publicidad->lugar }}<br>
                        <strong>fecha inicio:</strong>  {{ $publicidad->fechaini->format('d/m/Y') }}<br>
                        <strong>fecha fin:</strong>  {{ $publicidad->fechafin->format('d/m/Y') }}<br>
                        <strong>fecha creación:</strong>  {{ $publicidad->created_at->format('d/m/Y') }}<br>
                        <strong>fecha actualización:</strong>  {{ $publicidad->updated_at->format('d/m/Y') }}<br>
                    </p>
                </div>
            </div>
    </div>
</div>
