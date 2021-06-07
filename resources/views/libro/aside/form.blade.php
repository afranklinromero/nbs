@include('libro.aside.info')
@include('libro.aside.error')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::hidden('user_id',  Auth::user()->id ) !!}
                        {!! Form::label('titulo','Titulo') !!}
                        {!! Form::text('titulo', isset($libro->titulo)? $libro->titulo:null,['class'=>'form-control'])!!}
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 form-group">
                        {!! Form::label('tapa', 'Imagen vista previa:', ['class' => 'form-label']) !!}
                        {!! Form::file('tapa', ['class' => 'form-control-file', 'accept' => 'image/*', isset($libro->id)? '':'required']) !!}
                        <div id="preview"><img class="img-fluid rounded img-thumbnail pl-5" src="{{ asset('tapas') }}/{{ isset($libro->id)? $libro->id : null}}.{{ isset($libro->ext)?$libro->ext:'' }}" alt=""></div>
                    </div>
                    
                    <div class="col-md-form-group">
                        {!! Form::label('documentopdf', 'Documento pdf:', ['class' => 'form-label']) !!}
                        {!! Form::file('documentopdf', ['class' => 'form-control-file', 'accept' => '.pdf', isset($libro->id)? '':'required']) !!}
                        <div id="viewpdf">
                            @if (isset($libro->documentopdf))
                                <a id="urlpdf" href="{{ asset('tapas') }}/{{$libro->id}}.pdf"></a>
                            @endif
                            <canvas></canvas>
                        </div>
                        <!--<div id="preview"><img class="img-fluid rounded" src="{{ asset('tapas') }}/{{ isset($libro->id)? $libro->id : null}}.png" alt=""></div>-->
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 form-group">
                        {!! Form::label('autor','Autor') !!}
                        {!! Form::text('autor',isset($libro->autor)? $libro->autor:null,['class'=>'form-control'])!!}
                    </div>

                    <div class="col-md-4 form-group">
                        {!! Form::label('edicion','Edicion') !!}
                        {!! Form::text('edicion',isset($libro->edicion)? $libro->edicion:null,['class'=>'form-control'])!!}
                    </div>
                    
                    <div class="col-md-4 form-group">
                        {!! Form::label('serie','Serie') !!}
                        {!! Form::text('serie',isset($libro->serie)? $libro->serie:null,['class'=>'form-control'])!!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4  form-group">
                        {!! Form::label('fecha','Fecha edición') !!}
                        {!! Form::date('fecha',isset($libro->fecha)? $libro->fecha:null,['class'=>'form-control'])!!}
                    </div>
                    <div class=" col-md-4 form-group">
                        {!! Form::label('nropublicacion','Numero publicación') !!}
                        {!! Form::number('nropublicacion', isset($libro->nropublicacion)? $libro->nropublicacion:null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="col-md-4 form-group">
                        {!! Form::label('lugarpublicacion','Lugar de publicacion') !!}
                        {!! Form::text('lugarpublicacion',isset($libro->lugarpublicacion)? $libro->lugarpublicacion:null,['class'=>'form-control'])!!}
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>


