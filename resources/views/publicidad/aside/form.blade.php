@include('publicidad.aside.info')
@include('publicidad.aside.error')
    <div class="row mb-2">
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
                                    {!! Form::label('imagen', 'Portada articulo:', ['class' => 'form-label']) !!}
                                    @if (isset($publicidad->id))
                                        <!--EDITAR-->
                                        {!! Form::file('imagen', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                                        <div id="preview"><img class="img-fluid rounded" src="{{ asset('storage/files/publicidad/'.$publicidad->id.'/'.$publicidad->id.'.'.$publicidad->ext) }}" alt=""></div>    
                                    @else
                                        <!--CREAR-->
                                        {!! Form::file('imagen', ['class' => 'form-control-file', 'accept' => 'image/*', 'required']) !!}
                                        <div id="preview"></div>
                                    @endif
                                    
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
                            <div class="col-md-3">
                                <p>Lugar:</p>
                                <div class="form-check">
                                    @if (isset($publicidad->id))
                                    <p>{{$publicidad->lugar}}</p>
                                        {!! Form::checkbox('lugar[]', 'blog', (strpos($publicidad->lugar, 'blog')!==false)? true:false, ['id'=>'checkblog']) !!}
                                        {!! Form::label('checkblog', 'Blog', ['class' => 'form-check-label']) !!} <br>

                                        {!! Form::checkbox('lugar[]', 'libro', (strpos($publicidad->lugar, 'libro')!==false)? true:false, ['id'=>'checklibro']) !!}
                                        {!! Form::label('checklibro', 'Libro', ['class' => 'form-check-label']) !!} <br>

                                        {!! Form::checkbox('lugar[]', 'concurso', (strpos($publicidad->lugar, 'concurso')!==false)? true:false, ['id'=>'checkconcurso']) !!}
                                        {!! Form::label('checkconcurso', 'Concurso', ['class' => 'form-check-label']) !!}    
                                    @else
                                        {!! Form::checkbox('lugar[]', 'blog', true, ['id'=>'checkblog']) !!}
                                        {!! Form::label('checkblog', 'Blog', ['class' => 'form-check-label']) !!} <br>

                                        {!! Form::checkbox('lugar[]', 'libro', true, ['id'=>'checklibro']) !!}
                                        {!! Form::label('checklibro', 'Libro', ['class' => 'form-check-label']) !!} <br>

                                        {!! Form::checkbox('lugar[]', 'concurso', true, ['id'=>'checkconcurso']) !!}
                                        {!! Form::label('checkconcurso', 'Concurso', ['class' => 'form-check-label']) !!}    
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="card-title">
                                    {!! Form::label('link', 'Enlace:', ['class' => 'form-label']) !!}
                                    {!! Form::text('link', isset($publicidad->link) ? $publicidad->link : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                            
                            <div class="col-md-3">
                                <p class="card-title">
                                    {!! Form::label('fechaini', 'Fecha inicio:', ['class' => 'form-label']) !!}
                                    {!! Form::date('fechaini', isset($publicidad->fechaini) ? $publicidad->fechaini : now(), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p class="card-title">
                                    {!! Form::label('fechafin', 'Fecha fin:', ['class' => 'form-label']) !!}
                                    {!! Form::date('fechafin', isset($publicidad->fechafin) ? $publicidad->fechafin : now(), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



        </div>
    </div>
