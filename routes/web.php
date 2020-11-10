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
Route::resource('libro', 'LibroController');

Route::get('marcador/buscar1/{libro_id}', 'MarcadorController@buscar1')->name('marcador.buscar1');
Route::get('marcador/buscar2', 'MarcadorController@buscar2')->name('marcador.buscar2');
Route::get('marcador/irapagina', 'MarcadorController@irapagina')->name('marcador.irapagina');
Route::resource('marcador', 'MarcadorController');

Route::get('concurso/juegos', 'ConcursoController@juegos')->name('concurso.juegos');
Route::get('concurso/jugar/{concurso_id}', 'ConcursoController@jugar')->name('concurso.jugar');
Route::get('concurso/siguiente/{index}/{respuesta_id}', 'ConcursoController@siguiente')->name('concurso.siguiente');
Route::resource('concurso', 'ConcursoController');

Route::resource('participacion', 'ParticipacionController');

Route::resource('clasificacion', 'ClasificacionController');


