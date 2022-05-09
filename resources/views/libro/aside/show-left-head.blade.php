

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ayuda</button>
                <a href="{{ route('libro.download', ['documentopdf'=>$libro->documentopdf, 'titulo'=>$libro->titulo.'.pdf']) }}" download class="btn btn-success">descargar</a>
            </div>
        </p>
    </div>

    <div class="col-sm-6 col-md-12">
        
        <div class="alert alert-success"><strong class="text-lowercase">lugar publicación › </strong> <span class="text-lowercase">{{ $libro->lugarpublicacion }} </span><br></div> 
        <div class="alert alert-success"><strong class="text-lowercase">autor › </strong> <span class="text-lowercase">{{ $libro->autor }} </span><br></div> 
        
        

        @if (Auth::check())
            @if (Auth::user()->hasRole('admin'))
                <img class="img-fluid rounded img-thumbnail p-2" src="{{ asset('storage/files/libros/tapas/'.$libro->tapa) }}" alt="">
            @endif
        @endif
        
        {!! Form::hidden('documentopdf', $libro->documentopdf, ['id'=>'documentopdf']) !!}
        <br>
        
    </div>

    <div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header alert-success">
                        
                        <h5 class="modal-title" id="exampleModalLabel">Ayuda visor documento pdf</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <img class="img-fluid rounded" src="{{asset('img/ayuda/visor/barra.png')}}" alt="">
                            <ol class="text-sm">
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/1.png')}}" alt=""> <Strong>barra lateral, </Strong>activar/desactivar barra lateral</li>
                                <li>
                                    <img class="img-fluid rounded" src="{{asset('img/ayuda/visor/2.png')}}" alt=""> 
                                    <Strong>buscar, </Strong> buscar texto dentro del documento, esta opción activa la siguiente barra de herramientas <br>
                                    <img class="img-fluid rounded" src="{{asset('img/ayuda/visor/barra2.png')}}" alt=""> 
                                    <ol>
                                        <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/21.png')}}" alt=""> <Strong>buscar en el documento, </Strong> ecribir la palabra a buscar en el documento.</li>
                                        <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/22.png')}}" alt=""> <Strong>anterior, </Strong> anterior coincidencia de busqueda.</li>
                                        <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/23.png')}}" alt=""> <Strong>siguiente, </Strong> siguiente coincidencia de busqueda.</li>
                                        <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/24.png')}}" alt=""> <Strong>resaltar todos, </Strong> se resaltará en el documento todas las coincidencias de busqueda.</li>
                                        <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/25.png')}}" alt=""> <Strong>coincidencia mayuscula/minuscula, </Strong> los resultados de busqueda respetaran la coincidencia entre mayusculas y minuscuas, según como se escriba la frase a buscar.</li>
                                        <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/26.png')}}" alt=""> <Strong>palabras completas, </Strong> buscar las plabras completas.</li>
                                    </ol>

                                </li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/3.png')}}" alt=""> <Strong>anterior, </Strong> ir a la pagina anterior.</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/4.png')}}" alt=""> <Strong>siguiente, </Strong> ir a la pagina siguiente.</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/5.png')}}" alt=""> <Strong>pagina, </Strong> número de pagina actual.</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/6.png')}}" alt=""> <Strong>paginas, </Strong> número total de paginas que contiene el documento.</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/7.png')}}" alt=""> <Strong>zoom-, </Strong> alejar página.</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/8.png')}}" alt=""> <Strong>zoom+, </Strong> acercar página.</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/9.png')}}" alt=""> <Strong>tamaño de página, </Strong> seleccionar un tamaño predeterminado de página</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/10.png')}}" alt=""> <Strong>modo presentación, </Strong> ver el documento en pantalla completa</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/11.png')}}" alt=""> <Strong>abrir documento, </Strong>puede utilizar el visor, para abrir un archivo de su disco local</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/12.png')}}" alt=""> <Strong>imprimir, </Strong>imprimir documento</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/13.png')}}" alt=""> <Strong>descargar, </Strong> descargar documento</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/14.png')}}" alt=""> <Strong>hoja actual, </Strong> copiar o abrir hoja actual</li>
                                <li><img class="img-fluid rounded" src="{{asset('img/ayuda/visor/15.png')}}" alt=""> <Strong>herramientas, </Strong> otras herramientas</li>
                            </ul>
                        
                    </div>
                    <div class="modal-footer alert-success">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</div>
<hr>
