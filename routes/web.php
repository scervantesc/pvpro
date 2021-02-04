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
    return view('auth.login');
});


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/almacen', 'AlmacenController@index')->name('almacen.index');
Route::get('/productos', 'ProductosController@index')->name('productos.index');
Route::get('/almacen/add', 'AlmacenController@add')->name('almacen.add');
Route::post('/almacen/new/add', 'AlmacenController@new')->name('almacen.new');
Route::get('/almacen/edit/{almacen}', 'AlmacenController@edit')->name('almacen.edit');
Route::patch('/almacen/update/{almacen}', 'AlmacenController@update')->name('almacen.update');


Route::get('/configuracion','ConfiguracionController@index')->name('conf.index');
Route::post('/configuracion/update','ConfiguracionController@update')->name('config.update');