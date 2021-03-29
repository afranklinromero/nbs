@if(Session::has('info-pregunta'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            &times;
        </button>
        {{Session::get ('info-pregunta')}}
    </div>

@endif
