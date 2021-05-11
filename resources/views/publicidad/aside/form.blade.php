@include('publicidad.aside.info')
@include('publicidad.aside.error')
    <div class="row">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-title">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    {!! Form::hidden('user_id',  Auth::user()->id ) !!}
                                    {!! Form::label('titulo', 'Titulo:', ['class' => 'form-label']) !!}
                                    {!! Form::text('titulo', isset($publicidad->titulo) ? $publicidad->titulo : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-title">
                                    {!! Form::label('multimedia', 'Portada articulo:', ['class' => 'form-label']) !!}
                                    {!! Form::file('multimedia', ['class' => 'form-control-file']) !!}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="card-title">
                                    {!! Form::label('contenido', 'Contenido:', ['class' => 'form-label']) !!}
                                    {!! Form::textarea('contenido', isset($publicidad->contenido) ? $publicidad->contenido : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'3074', 'required']) !!}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-title">
                                    {!! Form::label('link', 'Enlace:', ['class' => 'form-label']) !!}
                                    {!! Form::text('link', isset($publicidad->link) ? $publicidad->link : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p class="card-title">
                                    {!! Form::label('fechaini', 'Fecha inicio:', ['class' => 'form-label']) !!}
                                    {!! Form::date('fechaini', isset($publicidad->fechaini) ? $publicidad->fechafin : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p class="card-title">
                                    {!! Form::label('fechafin', 'Fecha fin:', ['class' => 'form-label']) !!}
                                    {!! Form::date('fechafin', isset($publicidad->fechaini) ? $publicidad->fechafin : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



        </div>
    </div>
