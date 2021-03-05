@include('pregunta.aside.info')
@include('pregunta.aside.error')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route'=>'pregunta.store', 'id'=>'form-pregunta-create']) !!}
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            {!! Form::hidden('user_id',  Auth::user()->id ) !!}
                            {!! Form::label('tema_id', 'Id Tema:', ['class' => 'form-label']) !!}
                            {!! Form::select('tema_id', $temas->pluck('nombre', 'id'), null, ['class'=>'form-control']) !!}
                        </h4>
                        <h4 class="card-title">
                            {!! Form::label('pregunta', 'Enunciado pregunta:', ['class' => 'form-label']) !!}
                            {!! Form::text('pregunta', null, ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>512, 'required']) !!}
                        </h4>
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Respuesta</th>
                                    <th>Es correcta?</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 4; $i++)
                                <tr>
                                    <th>{{ ($i+1) }}</th>
                                    <td>{!! Form::text('respuestas[]', null, ['class' => 'form-control']) !!}</td>
                                    <td class="text-center">
                                        {!! Form::radio('escorrecta', ($i) , ($i==0)?true:false, ['class' => 'form-check-input']) !!}
                                    </td>

                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>


                {!! Form::submit('Enviar', ['class' => 'btn btn-primary store']) !!}
                <a href="{{route('pregunta.index')}}" class="btn btn-success index">Volver</a>

            {!! Form::close() !!}
        </div>
    </div>
