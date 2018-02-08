<?php

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

Auth::routes();

Route::get('/inicio/perfil','PerfilController@perfil');

Route::get('/inicio','HomeController@index');

Route::get('/inicio/crearPost','PostController@crear');

Route::post('/inicio/crearPost','PostController@guardarPost');

Route::get('/inicio/crearTag','TagController@index');

Route::get('/inicio/crearHashtag','HashtagController@index');

Route::get('/inicio/{id}','HomeController@show');

Route::post('/inicio/{id}','HomeController@guardarComentario');

Route::get('/inicio/verPerfil','HomeController@perfil');

Route::get('/inicio/editar/{id}', 'EditarController@index');

Route::get('/inicio/editar/{id}', 'EditarController@getInfo');

Route::post('/inicio/editar/{id}', 'EditarController@update');

