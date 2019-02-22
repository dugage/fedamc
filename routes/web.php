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
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
//Registration Routes...
Route::get('registro', 'Auth\RegisterController@showRegistrationForm')->name('registro');
Route::post('registro', 'Auth\RegisterController@register');


//	AGRUPAMOS LAS URL QUE COMPARTEN EL MISMO PREFIJO NTRANET
Route::middleware(['auth'])->group(function () {
	Route::group(['prefix' => 'intranet'], function(){

		Route::get('/maestros', 'TeachersController@index')->name('maestros');
		Route::get('/federados', 'StudendsController@index')->name('federados');
		Route::get('/usuarios', 'UserController@index')->name('usuarios');

		// RUTA PARA TODAS LAS PÁGINAS QUE COMPARTEN EL MISMO PREFIJO USUARIOS
		Route::group(['prefix' => 'usuarios'], function(){
			Route::get('/nuevo', function(){ return view('users.new'); })->name('usuarios.nuevo');
			Route::get('/ver/{user}', 'UserController@show')->name('usuarios.ver');
			Route::get('/editar/{user}', 'UserController@edit')->name('usuarios.editar');

			Route::post('/nuevo', 'UserController@new');
			Route::put('/editar/{user}', 'UserController@update');
			Route::delete('/eliminar/{user}', 'UserController@delete')->name('usuarios.eliminar');
		});

		//	RUTA PARA TODAS LAS PÁGINAS QUE COMPARTE EL MISMO PREGIJO MAESTROS
		Route::group(['prefix' => 'maestros'], function(){
			Route::get('/nuevo', function(){ return view('teachers.new'); })->name('maestros.nuevo');
			Route::get('/ver/{teachers?}', 'TeachersController@show')->name('maestros.ver');
			Route::get('/editar/{teachers?}', 'TeachersController@edit')->name('maestros.editar');

			Route::post('/nuevo', 'TeachersController@new');
			Route::put('/editar/{teachers?}', 'TeachersController@update');
			Route::delete('/eliminar/{teachers?}', 'TeachersController@delete')->name('maestros.eliminar');
			
		});

		//RUTA PARA TODAS LAS PÁGINAS QUE COMPARTEN EL MISMO PREFIJO FEDERADOS
		Route::group(['prefix' => 'federados'], function(){
			Route::get('/nuevo', function(){ return view('studends.new'); })->name('federados.nuevo');
			Route::get('/ver/{studends?}', 'StudendsController@show')->name('federados.ver');
			Route::get('/editar/{studends?}','StudendsController@edit')->name('federados.editar');

			Route::post('/nuevo', 'StudendsController@new');
			Route::put('/editar', 'StudendsController@update');
			Route::delete('/eliminar/{studends?}', 'StudendsController@delete')->name('federados.eliminar');
		});
		
	});
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/intranet', function () {
	return view('index');
})->middleware('auth');