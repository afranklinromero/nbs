<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('/', 'LibroController');


Route::resource('autor', 'AutorController');

Route::get('libro/editarcorreo', 'LibroController@editarcorreo')->name('libro.editarcorreo');
Route::post('libro/enviarcorreo', 'LibroController@enviarcorreo')->name('libro.enviarcorreo');
Route::get('libro/buscar', 'LibroController@buscar')->name('libro.buscar');
Route::get('libro/pagination/{page}', 'LibroController@pagination')->name('libro.pagination');
Route::get('libro/download/{documentopdf}/{titulo}', 'LibroController@download')->name('libro.download');
Route::get('libro/showmarcador/{id}/{marcador_id}', 'LibroController@showmarcador')->name('libro.showmarcador');
Route::resource('libro', 'LibroController');

Route::get('marcador/buscar', 'MarcadorController@buscar')->name('marcador.buscar');
Route::get('marcador/buscar2', 'MarcadorController@buscar2')->name('marcador.buscar2');
Route::get('marcador/irapagina', 'MarcadorController@irapagina')->name('marcador.irapagina');
Route::resource('marcador', 'MarcadorController');

Route::get('concurso/juegos', 'ConcursoController@juegos')->name('concurso.juegos');
Route::get('concurso/jugar/{temaconcurso_id}', 'ConcursoController@jugar')->name('concurso.jugar');
Route::get('concurso/siguientepregunta/{index}/{temaconcurso_id}/{preguntaanterior_id}', 'ConcursoController@siguientepregunta')->name('concurso.siguientepregunta');
Route::get('concurso/responder/{mirespuesta_id}', 'ConcursoController@responder')->name('concurso.responder');
//Route::get('concurso/responder/{index}/{pregunta_id}/{mirespuesta_id}', 'ConcursoController@responder')->name('concurso.responder');
//Route::get('concurso/calificar/{index}/{respuesta_id}/{respuesta_id}', 'ConcursoController@calificar')->name('concurso.calificar');
Route::resource('concurso', 'ConcursoController');

Route::resource('temaconcurso', 'TemaconcursoController');

Route::resource('participacion', 'ParticipacionController');

Route::resource('clasificacion', 'ClasificacionController');

Route::resource('pregunta', 'PreguntaController');

Route::put('sugerenciasnbs/showme/{id}', 'SugerenciasnbsController@showme')->name('sugerenciasnbs.showme');
Route::resource('sugerenciasnbs', 'SugerenciasnbsController');

Route::resource('blog', 'BlogController');

Route::get('publicidad/download/{id}', 'BlogController@download')->name('blog.download');
Route::put('publicidad/altabaja/{id}', 'BlogController@altabaja')->name('blog.altabaja');
Route::resource('publicidad', 'PublicidadController');
