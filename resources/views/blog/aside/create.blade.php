@include('blog.aside.info')
@include('blog.aside.error')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route'=>'blog.store', 'id'=>'form-blog-create', 'enctype'=>"multipart/form-data"]) !!}
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-title">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    {!! Form::hidden('user_id',  Auth::user()->id ) !!}
                                    {!! Form::label('titulo', 'Titulo:', ['class' => 'form-label']) !!}
                                    {!! Form::text('titulo', 'NUEVO ARTICULO', ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
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
                                    {!! Form::textarea('contenido', 'ASLÑDFJA SDLFJK ASLÑDFJK ALSDJKF AKLSDF', ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'3074', 'required']) !!}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-title">
                                    {!! Form::label('autor', 'Autor:', ['class' => 'form-label']) !!}
                                    {!! Form::text('autor', 'alfredo', ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-title">
                                    {!! Form::label('referencia', 'Referencia:', ['class' => 'form-label']) !!}
                                    {!! Form::text('referencia', 'alfredo', ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>'64', 'required']) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                <a href="{{route('concurso.index')}}#blogs" class="btn btn-success index">Volver</a>

            {!! Form::close() !!}
        </div>
    </div>
