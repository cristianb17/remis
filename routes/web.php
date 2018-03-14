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

use App\Auto;

Route::get('/', function () {
    return view('auth/login');
});    

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Choferes
Route::get('/listarChoferes', 'ChoferController@listarChoferes')->name('listarChoferes');
Route::get('/crearChoferes', 'ChoferController@crearChofer')->name('crearChofer');
Route::post('/guardarChofer', 'ChoferController@guardarChofer')->name('guardarChofer');
Route::get('/eliminarChofer', 'ChoferController@eliminarChofer')->name('eliminarChofer');
Route::get('/verChofer', 'ChoferController@verChofer')->name('verChofer');
Route::post('/listarChoferes', 'ChoferController@actualizarChofer')->name('actualizarChofer');
Route::get('/editarChofer', 'ChoferController@editarChofer')->name('editarChofer');

//Autos
Route::get('/auto', 'AutoController@crearAuto')->name('crearAuto');
Route::post('/guardar', 'AutoController@guardarAuto')->name('guardarAuto');
Route::get('/listarAutos', 'AutoController@listarAutos')->name('listarAutos');
Route::get('/ver', 'AutoController@verAuto')->name('ver');
Route::get('/eliminar', 'AutoController@eliminarAuto')->name('eliminar');
Route::get('/editar', 'AutoController@editarAuto')->name('editar');
Route::post('/listarAutos', 'AutoController@actualizarAuto')->name('actualizar');


//Clientes
Route::get('/listarClientes', 'ClienteController@listarClientes')->name('listarClientes');
Route::get('/verCliente', 'ClienteController@ver')->name('verCliente');
Route::get('/crearCliente', 'ClienteController@crearCliente')->name('crearCliente');
Route::post('/guardarCliente', 'ClienteController@guardarCliente')->name('guardarCliente');
Route::get('/eliminarCliente', 'ClienteController@eliminarCliente')->name('eliminarCliente');
Route::post('/actualizarCliente', 'ClienteController@actualizarCliente')->name('actualizarCliente');
Route::get('/editarCliente', 'ClienteController@editarCliente')->name('editarCliente');

//Reservas
Route::get('/ingresarReserva', 'GestionReservaController@ingresarReserva')->name('ingresarReserva');
Route::post('/crearReserva', 'GestionReservaController@crearReserva')->name('crearReserva');
Route::get('/ver', 'GestionReservaController@verReserva')->name('ver');
Route::get('/eliminar', 'GestionReservaController@eliminarAuto')->name('eliminar');
Route::get('/editar', 'AutoController@editarAuto')->name('editar');
Route::post('/listarReservas', 'GestionReservaController@listarReservas')->name('listarReservas');

