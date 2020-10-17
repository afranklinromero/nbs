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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('autor', 'AutorController');

Route::get('libro/buscar', 'LibroController@buscar')->name('libro.buscar');
Route::resource('libro', 'LibroController');

Route::get('marcador/buscar1/{libro_id}', 'MarcadorController@buscar1')->name('marcador.buscar1');
Route::get('marcador/buscar2', 'MarcadorController@buscar2')->name('marcador.buscar2');
Route::resource('marcador', 'MarcadorController');

Route::resource('gallo', 'GalloController');
