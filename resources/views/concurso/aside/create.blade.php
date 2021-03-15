@include('concurso.aside.info')
@include('concurso.aside.error')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route'=>'concurso.store', 'id'=>'form-concurso-create']) !!}
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-success">Datos Concurso</h4>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!! Form::hidden('user_id',  Auth::user()->id ) !!}
                                {!! Form::label('tema_id', 'Id Tema:', ['class' => 'form-label font-weight-bold']) !!}
                                {!! Form::select('tema_id', $temas->pluck('nombre', 'id'), null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-8">
                                {!! Form::label('nombre', 'Nombre:', ['class' => 'form-label font-weight-bold']) !!}
                                {!! Form::text('nombre', null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('descripcion', 'Descripcion:', ['class' => 'form-label font-weight-bold']) !!}
                                {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'rows'=>2, 'required']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {!! Form::label('fechaini', 'Fecha de Inicio:', ['class' => 'form-label font-weight-bold']) !!}
                                        {!! Form::date('fechaini', now(), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('fechafin', 'Fecha Finalizacion:', ['class' => 'form-label font-weight-bold']) !!}
                                        {!! Form::date('fechafin', now(), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h4 class="text-success">Configuracion</h4>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!! Form::label('nropreguntas', 'Número de preguntas:', ['class' => 'form-label font-weight-bold']) !!}
                                {!! Form::number('nropreguntas', 10, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('limiterespuestaserroneas', 'Número respuestas incorrectas permitidas:', ['class' => 'form-label font-weight-bold']) !!}
                                {!! Form::number('limiterespuestaserroneas', 0, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('puntosporrespuesta', 'Puntos por respuesta correcta:', ['class' => 'form-label font-weight-bold']) !!}
                                {!! Form::number('puntosporrespuesta', 1, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                {!! Form::label('tiempolimite', 'Tiempo para responder todas las preguntas (seg):', ['class' => 'form-label font-weight-bold']) !!}
                                {!! Form::number('tiempolimite', 90, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                            </div>
                            <div class="form-group col-md-4">

                            </div>
                            <div class="form-group col-md-4">

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col md-12 text-right">
                                {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                                <a href="{{route('concurso.index')}}" class="btn btn-success index">Volver</a>
                            </div>
                        </div>


                    </div>
                </div>




            {!! Form::close() !!}
        </div>
    </div>
