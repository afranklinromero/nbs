
<h3>{{$sugerencia->subject}}</h3>
<div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-star">
            <p class="me-md-2"><strong>{{$sugerencia->name}}</strong> <span class="text-muted"> [{{ $sugerencia->email }}] </span> </p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <p class="text-muted">{{ $sugerencia->created_at->format('d M Y') }}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col form-group">
        {!! Form::textarea('subject', $sugerencia->content, ['class' => 'form-control', 'disabled']) !!}
    </div>
</div>
