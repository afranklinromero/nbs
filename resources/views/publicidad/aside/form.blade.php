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
                                    <label class="form-label" for="titulo"><span class="text-danger fw-bold">*</span> <span class="fw-bold">Titulo</span></label>
                                    <input class="form-control" type="text" name="titulo" id="titulo" value="{{ isset($publicidad->titulo)? $publicidad->titulo: old('titulo') }}">
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p class="fw-bold">Lugar:</p>
                                <div class="form-check">
                                    @if (isset($publicidad->id))
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
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <p class="card-title">
                                    <label class="form-label" for="imagenfile"><span class="text-danger fw-bold">*</span> <span class="fw-bold">Imagen pulblicidad</span></label>
                                    {!! Form::file('imagenfile', ['class' => 'form-control', 'accept' => 'image/*', 'name' => 'imagenfile', 'id' => 'imagenfile']) !!}
                                    @if (isset($publicidad))
                                        <!--EDITAR-->
                                        <div id="preview">
                                            <img 
                                                class="rounded" 
                                                height="180" 
                                                src="{{ asset('storage/files/publicidad/'.$publicidad->id.'/'.$publicidad->imagen) }}" alt=""
                                            >
                                        </div>    
                                    @else
                                        <!--CREAR-->
                                        <div id="preview"></div>
                                    @endif
                                    
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-title">
                                    <label class="form-label" for="contenido"><span class="fw-bold">Contenido</span></label>
                                    {!! Form::textarea('contenido', isset($publicidad->contenido) ? $publicidad->contenido : old('contenido'), ['class' => 'form-control']) !!}
                                </p>
                            </div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-md-3">
                                <p class="card-title">
                                    {!! Form::label('link', 'Enlace:', ['class' => 'fw-bold form-label']) !!}
                                    {!! Form::text('link', isset($publicidad->link) ? $publicidad->link : null, ['class' => 'form-control']) !!}
                                </p>
                            </div>
                            
                            <div class="col-md-3">
                                <p class="card-title">
                                    {!! Form::label('fechaini', 'Fecha inicio:', ['class' => 'form-label fw-bold']) !!}
                                    {!! Form::date('fechaini', isset($publicidad->fechaini) ? $publicidad->fechaini : now(), ['class' => 'form-control']) !!}
                                </p>
                            </div>
                            <div class="col-md-3">
                                <p class="card-title">
                                    {!! Form::label('fechafin', 'Fecha fin:', ['class' => 'form-label fw-bold']) !!}
                                    {!! Form::date('fechafin', isset($publicidad->fechafin) ? $publicidad->fechafin : now(), ['class' => 'form-control']) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



        </div>
    </div>
