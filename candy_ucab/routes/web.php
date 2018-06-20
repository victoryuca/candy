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

Route::group(['prefix' => 'admin'], function(){

	Route::resource('usuarios','UsuariosController');
	Route::resource('naturales','NaturalesController');
	Route::resource('juridicos', 'JuridicosController');
	Route::resource('productos', 'ProductosController');
	Route::get('/naturales/{nat_id}/destroy', [
		'uses' => 'NaturalesController@destroy',
		'as' => 'naturales.destroy'
		]);
	Route::get('/juridicos/{jur_id}/destroy', [
		'uses' => 'JuridicosController@destroy',
		'as' => 'juridicos.destroy'
		]);
	Route::get('/productos/{pro_id}/destroy', [
		'uses' => 'ProductosController@destroy',
		'as' => 'productos.destroy'
	]);
});