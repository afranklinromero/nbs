@include('pregunta.aside.info')
    <div class="row">
        <div class="col-md-6">

            {!! Form::open(['route'=>'pregunta.store']) !!}
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            {!! Form::label('pregunta', 'Enunciado pregunta:', ['class' => 'form-label']) !!}
                            {!! Form::text('pregunta', null, ['class' => 'form-control']) !!}
                        </h4>
                        @for ($i = 0; $i < 4; $i++)
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{!! Form::label('respuestas[]', 'Respuesta '. ($i+1) . '?: ', ['class' => 'form-label']) !!}</h5>
                                    <p class="card-text">
                                        {!! Form::text('respuestas[]', null, ['class' => 'form-control']) !!}
                                    </p>
                                    <div class="form-check">
                                        {!! Form::radio('escorrecto[]', null, false, ['class' => 'form-check-input']) !!}
                                        {!! Form::label('escorrecto[]', 'Es correcto ? ', ['class' => 'form-check-label']) !!}

                                    </div>
                                </div>
                            </div>
                            <br>
                        @endfor
                        <br>
                    </div>
                </div>


                {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                <a href="{{route('sugerenciasnbs.index')}}" class="btn btn-success index">Volver</a>

            {!! Form::close() !!}
        </div>
    </div>
