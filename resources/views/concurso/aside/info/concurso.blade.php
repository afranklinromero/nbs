@if(Session::has('info-concurso'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            &times;
        </button>
        {{Session::get ('info-concurso')}}
    </div>

@endif
