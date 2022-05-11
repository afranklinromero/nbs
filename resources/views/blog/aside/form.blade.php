@include('blog.aside.info')
@include('blog.aside.error')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        &times;
                    </button>
                    <p> <span class="text-danger fw-bold">*</span> Datos obligatorios </strong></p>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p class="card-title">
                            <input type="hidden" name="_token" id="token" style="color: rgb(43, 75, 57)" value="{{ csrf_token() }}">
                            {!! Form::hidden('user_id',  Auth::user()->id ) !!}
                            <label class="form-label" for="titulo"><span class="text-danger fw-bold">*</span> <span class="fw-bold">Titulo</span></label>
                            <input class="form-control" type="text" name="titulo" id="titulo" value="{{ isset($blog->titulo)? $blog->titulo: null }}">
                        </p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <p class="card-title">
                            <label class="form-label" for="contenido"><span class="fw-bold"><span class="text-danger">*</span> Contenido</span></label>
                            {!! Form::textarea('contenido', isset($blog->contenido) ? $blog->contenido : null, ['class' => 'form-control',]) !!}
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p class="card-title">
                            <label class="form-label" for="autor"><span class="fw-bold"><span class="text-danger">*</span> Autor</span></label>
                            {!! Form::text('autor', isset($blog->autor) ? $blog->autor : null, ['class' => 'form-control', ]) !!}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-title">
                            <label class="form-label" for="referencia"><span class="fw-bold"><span class="text-danger">*</span> Referencia</span></label>
                            {!! Form::text('referencia', isset($blog->referencia) ? $blog->referencia : null, ['class' => 'form-control', ]) !!}
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label" for="youtube"><span class="fw-bold">URL video youtube</span></label>
                        {!! Form::url('youtube', isset($blog->youtube) ? $blog->youtube : null, ['class' => 'form-control']) !!}

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p class="card-title">
                            <label class="form-label" for="imagen">
                                <span class="fw-bold">Imagen</span>
                            </label>
                            <input class="form-control" type="file" name="imagen" id="imagen" accept="image/*">

                            @if (isset($blog->id))
                                <div id="preview"><img class="img-fluid rounded pl-5" src="{{ asset('storage/files/blog/'.$blog->id.'/'.$blog->id.'.'.$blog->ext) }}" alt=""></div>
                            @else
                                <div id="preview"></div>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p class="card-title">
                            <label class="form-label" for="documentopdf"><span class="fw-bold">Documento en formato pdf</span></label>
                            <input class="form-control" type="file" name="documentopdf" id="documentopdf" accept=".pdf">

                            <div id="viewpdf">
                                @if (isset($blog->documentopdf))
                                    <p>mostrando documento</p>
                                    <a id="urlpdf" href="{{ asset('storage/files/blog/'.$blog->id.'/'.$blog->id.'.pdf') }}"></a>
                                @else
                                    <p>no hay documento</p>
                                @endif
                                <canvas></canvas>
                            </div>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
