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

Route::get('/inicio','HomeController@index')->name('home');

Route::get('/inicio/crearPost','PostController@index');

Route::get('/inicio/crearTag','TagController@index');

Route::get('/inicio/crearHashtag','HashtagController@index');

Route::get('/inicio/verPerfil','HomeController@perfil');
