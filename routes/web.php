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
Route::get('/activarChofer', 'ChoferController@activarChofer')->name('activarChofer');

//Autos
Route::get('/auto', 'AutoController@crearAuto')->name('crearAuto');
Route::post('/guardar', 'AutoController@guardarAuto')->name('guardarAuto');
Route::get('/listarAutos', 'AutoController@listarAutos')->name('listarAutos');
Route::get('/verAuto', 'AutoController@verAuto')->name('verAuto');
Route::get('/eliminarAuto', 'AutoController@eliminarAuto')->name('eliminarAuto');
Route::get('/editarAuto', 'AutoController@editarAuto')->name('editarAuto');
Route::post('/listarAutos', 'AutoController@actualizarAuto')->name('actualizarAuto');


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
Route::get('/ver', 'GestionReservaController@verReserva')->name('verReserva');
Route::get('/eliminar', 'GestionReservaController@eliminarReserva')->name('eliminarReserva');
Route::get('/editarReserva', 'GestionReservaController@editarReserva')->name('editarReserva');
Route::post('/listarReservas', 'GestionReservaController@listarReservas')->name('listarReservas');
Route::post('/actualizarReserva', 'GestionReservaController@actualizarReserva')->name('actualizarReserva');

