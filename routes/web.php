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

Route::get('/chofer', 'ChoferController@crearChofer')->name('chofer');
Route::post('/guardarChofer', 'ChoferController@guardarChofer')->name('guardarChofer');

Route::get('/auto', 'AutoController@crearAuto')->name('auto');
Route::post('/auto', 'AutoController@guardarAuto')->name('guardarAuto');
