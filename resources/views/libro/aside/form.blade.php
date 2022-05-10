@include('libro.aside.info')
@include('libro.aside.error')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::hidden('user_id',  Auth::user()->id ) !!}
                        <label for="titulo"><span class="fw-bold"><span class="text-danger">*</span>  Titulo</span></label>
                        {!! Form::text('titulo', isset($libro->titulo)? $libro->titulo:null,['class'=>'form-control', 'required', 'minlength'=>'8', 'maxlength'=>'256'])!!}
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">
                            Ingrese titulo (mínimo 8 caracteres, máximo 256 caracteres).
                        </div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="autor"><span class="fw-bold"><span class="text-danger">*</span>  Autor</span></label>
                        {!! Form::text('autor',isset($libro->autor)? $libro->autor:null,['class'=>'form-control', 'required', 'minlength'=>'8', 'maxlength'=>'128'])!!}
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">
                            Ingrese autor (mínimo 8 caracteres, máximo 128 caracteres).
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4  form-group">
                        <label for="fecha"><span class="fw-bold"><span class="text-danger">*</span>  Fecha edición</span></label>
                        {!! Form::date('fecha',isset($libro->fecha)? $libro->fecha:now(),['class'=>'form-control'])!!}
                    </div>
                    <div class="col-md-2"></div>
                    <!--<div class=" col-md-4 form-group">
                        {!! Form::label('nropublicacion','Numero publicación') !!}
                        {!! Form::number('nropublicacion', isset($libro->nropublicacion)? $libro->nropublicacion:null, ['class' => 'form-control']) !!}
                    </div>-->
                    <div class="col-md-4 form-group">
                        <label for="lugarpublicacion"><span class="fw-bold"><span class="text-danger">*</span>  Lugar de publicación</span></label>
                        {!! Form::text('lugarpublicacion',isset($libro->lugarpublicacion)? $libro->lugarpublicacion:null,['class'=>'form-control', 'required', 'minlength'=>'4', 'maxlength'=>'64'])!!}
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">
                            Ingrese autor (mínimo 4 caracteres, máximo 64 caracteres).
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="tapa"><span class="fw-bold"><span class="text-danger">*</span>  Imagen vista previa (464x604)px</span></label>
                        <input class="form-control" type="file" name="tapa" id="tapa" accept="image/*" >
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">
                            Seleccione imagen vista previa libro.
                        </div>
                        <div id="preview">
                            @if (isset($libro->id))
                                <img class="img-fluid rounded p-3" src="{{ asset('storage/files/libros/tapas/'.$libro->tapa) }}" alt="">
                            @endif
                        </div>

                    </div>
                    <div class="col-md-6 form-group">
                        <label for="documentopdf"><span class="fw-bold"><span class="text-danger">*</span>  Documento pdf</span></label>
                        <input class="form-control" type="file" name="documentopdf" id="documentopdf" accept=".pdf" {{isset($libro->id)? '':'required'}}>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">
                            Seleccione documento pdf.
                        </div>
                        <div id="viewpdf">
                            @if (isset($libro->documentopdf))
                                <a id="urlpdf" href="{{ asset('storage/files/libros/pdfs/'.$libro->documentopdf) }}"></a>
                            @endif
                            <canvas></canvas>
                        </div>
                        <!--<div id="preview"><img class="img-fluid rounded" src="{{ asset('tapas') }}/{{ isset($libro->id)? $libro->id : null}}.png" alt=""></div>-->
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


