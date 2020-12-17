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

Route::get('libro/buscar', 'LibroController@buscar')->name('libro.buscar');
Route::get('libro/download/{id}', 'LibroController@download')->name('libro.download');
Route::resource('libro', 'LibroController');

Route::get('marcador/buscar', 'MarcadorController@buscar')->name('marcador.buscar');
Route::get('marcador/buscar2', 'MarcadorController@buscar2')->name('marcador.buscar2');
Route::get('marcador/irapagina', 'MarcadorController@irapagina')->name('marcador.irapagina');
Route::resource('marcador', 'MarcadorController');

Route::get('concurso/juegos', 'ConcursoController@juegos')->name('concurso.juegos');
Route::get('concurso/jugar/{concurso_id}', 'ConcursoController@jugar')->name('concurso.jugar');
Route::get('concurso/siguientepregunta/{index}/{preguntaanterior_id}', 'ConcursoController@siguientepregunta')->name('concurso.siguientepregunta');
Route::get('concurso/responder/{mirespuesta_id}', 'ConcursoController@responder')->name('concurso.responder');
//Route::get('concurso/responder/{index}/{pregunta_id}/{mirespuesta_id}', 'ConcursoController@responder')->name('concurso.responder');
//Route::get('concurso/calificar/{index}/{respuesta_id}/{respuesta_id}', 'ConcursoController@calificar')->name('concurso.calificar');
Route::resource('concurso', 'ConcursoController');

Route::resource('participacion', 'ParticipacionController');

Route::resource('clasificacion', 'ClasificacionController');


