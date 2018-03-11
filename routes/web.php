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
    return view('auth/login');
});    

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Choferes
Route::get('/listarChoferes', 'ChoferController@listarChoferes')->name('listarChoferes');
Route::get('/crearChoferes', 'ChoferController@crearChofer')->name('crearChofer');
Route::post('/guardarChofer', 'ChoferController@guardarChofer')->name('guardarChofer');


//Autos
Route::get('/auto', 'AutoController@crearAuto')->name('crearAuto');
Route::post('/guardar', 'AutoController@guardarAuto')->name('guardarAuto');
Route::get('/listarAutos', 'AutoController@listarAutos')->name('listarAutos');
Route::get('/ver', 'AutoController@verAuto')->name('ver');
Route::get('/eliminar', 'AutoController@eliminarAuto')->name('eliminar');
Route::get('/editar', 'AutoController@editarAuto')->name('editar');

//Clientes
Route::get('/clientes', 'ClienteController@listarClientes')->name('cliente');

