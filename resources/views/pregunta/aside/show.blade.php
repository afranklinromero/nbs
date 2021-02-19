<h3>{{$sugerenciasnbs->subject}}</h3>
<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <p class="me-md-2"><strong>{{$sugerenciasnbs->name}}</strong> <span class="text-muted"> [{{ $sugerenciasnbs->email }}] </span> </p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <p class="text-muted">{{ $sugerenciasnbs->created_at }}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col form-group">
        {!! Form::textarea('subject', $sugerenciasnbs->content, ['class' => 'form-control', 'disabled']) !!}
    </div>

</div>

<div class="row">
    <div class="col">
        <a href="{{ route('sugerenciasnbs.index') }}" class="btn btn-success index">Volver</a>
    </div>
</div>

