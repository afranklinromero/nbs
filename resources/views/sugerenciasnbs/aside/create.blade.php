@include('sugerenciasnbs.aside.info')
@include('sugerenciasnbs.aside.error')

<h3>Enviar Sugerencia</h3>
    <div class="row">
        <div class="col-md-6">
        {!! Form::open(['route'=>'sugerenciasnbs.store']) !!}
            {{ csrf_field() }}
            <div class="mb-3">
            {!! Form::label('name', 'Nombre:', ['class' => 'form-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="mb-3">
            {!! Form::label('email', 'Correo:', ['class' => 'form-label']) !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="mb-3">
            {!! Form::label('subject', 'Asunto:', ['class' => 'form-label']) !!}
            {!! Form::text('subject', null, ['class' => 'form-control']) !!}
            </div>

            <div class="mb-3">
            {!! Form::label('content', 'Contenido:', ['class' => 'form-label']) !!}
            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows'=>'3']) !!}
            </div>

            <div class="mb-3">
                <div class="btn-group" role="group" aria-label="Basic example">
                    {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                    <a href="{{route('libro.index')}}" class="btn btn-success index">Volver</a>
                </div>
            </div>

        {!! Form::close() !!}
        </div>
    </div>
