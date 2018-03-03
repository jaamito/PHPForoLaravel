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

Route::get('/inicio/chat','ChatController@index');

Route::post('/inicio/chat','ChatController@store');

Route::get('/inicio/banear/{id}', 'BanController@indexBan');

Route::post('/inicio/banear/{id}', 'BanController@updateBan');

Route::get('/inicio/banear/{id}', 'BanController@infoBan');

Route::get('/inicio/perfil','PerfilController@perfil');

Route::get('/inicio','HomeController@index');

Route::post('/inicio/verTags','TagController@buscar');

Route::get('/inicio/verTags','TagController@buscar');

Route::get('/inicio/crearPost','PostController@crear');

Route::post('/inicio/crearPost','PostController@guardarPost');

Route::get('/inicio/crearPost','PostController@vertags');

Route::get('/inicio/crearTag','TagController@crear');

Route::post('/inicio/crearTag','TagController@guardarTag');

Route::get('/inicio/confirmDeleteTag/{id}', 'TagController@delete');

Route::delete('/inicio/confirmDeleteTag/{id}', 'TagController@delete');

Route::get('/inicio/crearHashtag','HashtagController@index');

Route::get('/inicio/{id}','HomeController@show');

Route::post('/inicio/{id}','HomeController@guardarComentario');

Route::get('/inicio/verPerfil','HomeController@perfil');

Route::get('/inicio/editar/{id}', 'EditarController@index');

Route::get('/inicio/editar/{id}', 'EditarController@getInfo');

Route::post('/inicio/editar/{id}', 'EditarController@update');

Route::get('/inicio/confirmacion/{id}', 'DeleteController@confirm');

Route::delete('/inicio/confirmacion/{id}', 'DeleteController@delete');

Route::get('/inicio/comentario/{id}', 'ComentariosController@getComent');

Route::post('/inicio/comentario/{id}', 'ComentariosController@update');

Route::get('/inicio/deleteComentario/{id}', 'ComentarioDeleteController@confirm');

Route::delete('/inicio/deleteComentario/{id}', 'ComentarioDeleteController@delete');

Route::get('/inicio/verPerfil/editarPerfil', 'PerfilController@editarP');

Route::post('/inicio/verPerfil/editarPerfil', 'PerfilController@update');

Route::get('/inicio/verPerfil/confirmarDeleteUser', 'PerfilController@confirmUser');

Route::delete('/inicio/verPerfil/confirmarDeleteUser', 'PerfilController@deleteUser');

Route::get('/inicio/verPerfil/cambiarPass', 'PerfilController@changeP');

Route::post('/inicio/verPerfil/cambiarPass', 'PerfilController@updateP');
