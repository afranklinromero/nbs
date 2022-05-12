
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            @if (Auth::user()->hasRole('admin'))
                <input type="hidden" name="estado" value="1">
            @else
                <input type="hidden" name="estado" value="2">
            @endif
            {!! Form::hidden('user_id',  Auth::user()->id ) !!}
            {!! Form::label('tema_id', 'Id Tema:', ['class' => 'form-label']) !!}
            {!! Form::select('tema_id', $temas->pluck('nombre', 'id'), isset($pregunta->tema_id)? $pregunta->tema_id: old('tema_id'), ['class'=>'form-control']) !!}
        </h4>
        <h4 class="card-title">
            {!! Form::label('pregunta', 'Enunciado pregunta:', ['class' => 'form-label']) !!}
            {!! Form::text('pregunta', isset($pregunta->pregunta)? $pregunta->pregunta : old('pregunta'), ['class' => 'form-control', 'minlength'=>'5', 'maxlength'=>512, 'required']) !!}
        </h4>
        <table class="table table-light">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Respuesta</th>
                    <th class="text-center">Es correcta?</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($respuestas))
                    @foreach ($respuestas as $i=>$mirespuesta)
                        <tr>
                            <th>
                                {{ ($i+1) }}
                                <input type="hidden" name="respuestas_id[]" value="{{ $mirespuesta->id }}">
                            </th>
                            <td>
                                {!! Form::text('respuestas[]', $mirespuesta->respuesta, ['class' => 'form-control']) !!}
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="escorrectas[]" value={{ $mirespuesta->escorrecta }}>
                                {!! Form::radio('escorrecta', ($i==0)? 1 : 0 , $mirespuesta->escorrecta, ['class' => 'form-check-input', 'disabled']) !!}
                            </td>

                        </tr>
                    @endforeach

                @else
                    @for ($i = 0; $i < 4; $i++)
                    <tr>
                        <th>{{ ($i+1) }}</th>
                        <td>{!! Form::text('respuestas[]', null, ['class' => 'form-control']) !!}</td>
                        <td class="text-center">
                            {!! Form::radio('escorrecta', ($i==0)? 1 : 0 , ($i==0)?true:false, ['class' => 'form-check-input', 'disabled']) !!}
                        </td>

                    </tr>
                    @endfor
                @endif


            </tbody>
        </table>
    </div>
</div>


