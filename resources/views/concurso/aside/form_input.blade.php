
<div class="card">
    <div class="card-body">
        <h4 class="text-success">Datos Concurso</h4>
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::hidden('user_id',  Auth::user()->id ) !!}
                {!! Form::label('tema_id', 'Tema:', ['class' => 'form-label font-weight-bold']) !!}
                <select class="form-select mb-3" aria-label=".form-select-lg example" name="tema_id" id="tema_id">
                    <option disabled selected>Seleccione un tema</option>
                    @foreach ($temas as $tema)
                        <option value="{{ $tema->id }}">{{ $tema->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-8">
                {!! Form::label('nombre', 'Nombre:', ['class' => 'form-label font-weight-bold']) !!}
                {!! Form::text('nombre', isset($concurso->nombre)? $concurso->nombre : old('nombre'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                {!! Form::label('descripcion', 'Descripcion:', ['class' => 'form-label font-weight-bold']) !!}
                {!! Form::textarea('descripcion', isset($concurso->descripcion)? $concurso->descripcion : old('descripcion'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'rows'=>2, 'required']) !!}
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::label('fechaini', 'Fecha de Inicio:', ['class' => 'form-label font-weight-bold']) !!}
                        {!! Form::date('fechaini', isset($concurso->fechaini)? $concurso->fechaini : old('fechaini'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('fechafin', 'Fecha Finalizacion:', ['class' => 'form-label font-weight-bold']) !!}
                        {!! Form::date('fechafin', isset($concurso->fechafin)? $concurso->fechafin : old('fechafin'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
                    </div>
                </div>
            </div>
        </div>


        <h4 class="text-success">Configuracion</h4>
        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('nropreguntas', 'Número de preguntas:', ['class' => 'form-label font-weight-bold']) !!}
                {!! Form::number('nropreguntas', isset($concurso->configuracion->nropreguntas)? $concurso->configuracion->nropreguntas : old('nropreguntas'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('limiterespuestaserroneas', 'Número respuestas incorrectas permitidas:', ['class' => 'form-label font-weight-bold']) !!}
                {!! Form::number('limiterespuestaserroneas', isset($concurso->configuracion->limiterespuestaserroneas)? $concurso->configuracion->limiterespuestaserroneas : old('limiterespuestaserroneas'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
            </div>
            <div class="form-group col-md-4">
                {!! Form::label('puntosporrespuesta', 'Puntos por respuesta correcta:', ['class' => 'form-label font-weight-bold']) !!}
                {!! Form::number('puntosporrespuesta', isset($concurso->configuracion->puntosporrespuesta)? $concurso->configuracion->puntosporrespuesta : old('puntosporrespuesta'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                {!! Form::label('tiempolimite', 'Tiempo para responder todas las preguntas (seg):', ['class' => 'form-label font-weight-bold']) !!}
                {!! Form::number('tiempolimite', isset($concurso->configuracion->tiempolimite)? $concurso->configuracion->tiempolimite : old('tiempolimite'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>256, 'required']) !!}
            </div>
            <div class="form-group col-md-4">

            </div>
            <div class="form-group col-md-4">

            </div>
        </div>




    </div>
</div>





