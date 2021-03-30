@if(Session::has('info-clasificacion'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            &times;
        </button>
        {{Session::get ('info-clasificacion')}}
    </div>

@endif
