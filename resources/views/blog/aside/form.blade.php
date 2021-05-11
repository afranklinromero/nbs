@include('blog.aside.info')
@include('blog.aside.error')
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
                                    {!! Form::text('titulo', isset($blog->titulo) ? $blog->titulo : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
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
                                    {!! Form::textarea('contenido', isset($blog->contenido) ? $blog->contenido : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'3074', 'required']) !!}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-title">
                                    {!! Form::label('autor', 'Autor:', ['class' => 'form-label']) !!}
                                    {!! Form::text('autor', isset($blog->autor) ? $blog->autor : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-title">
                                    {!! Form::label('referencia', 'Referencia:', ['class' => 'form-label']) !!}
                                    {!! Form::text('referencia', isset($blog->referencia) ? $blog->referencia : null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



        </div>
    </div>
