<?php

Route::get('/', function () {
    return view('welcome');
});

//	AGRUPAMOS LAS URL QUE COMPARTEN EL MISMO PREFIJO NTRANET
Route::middleware(['auth'])->group(function () {
	Route::group(['prefix' => 'intranet'], function(){

		Route::resource('usuarios', 'UserController')->parameters([
			'usuarios' => 'user'
		])->names([
			'index' => 'usuarios',
			'create' => 'usuarios.nuevo',
			'destroy' => 'usuarios.eliminar',
			'edit' => 'usuarios.editar',
			'show' => 'usuarios.ver',
		]);

		Route::resource('federados', 'StudendsController')->parameters([
			'federados' => 'studends'
		])->names([
			'index' => 'federados',
			'create' => 'federados.nuevo',
			'destroy' => 'federados.eliminar',
			'edit' => 'federados.editar',
			'show' => 'federados.ver',
		]);

		Route::resource('maestros', 'TeachersController')->parameters([
			'maestros' => 'teachers'
		])->names([
			'index' => 'maestros',
			'create' => 'maestros.nuevo',
			'destroy' => 'maestros.eliminar',
			'edit' => 'maestros.editar',
			'show' => 'maestros.ver',
		]);


		Route::resource('directores', 'DirectorsController')->parameters([
			'directores' => 'directors'
		])->names([
			'index' => 'directores',
			'create' => 'directores.nuevo',
			'destroy' => 'directores.eliminar',
			'edit' => 'directores.editar',
			'show' => 'directores.ver',
		]);		
	});
});

// Authentication Routes....
Route::get('registro', 'Auth\RegisterController@showRegistrationForm')->name('registro');
Route::post('registro', 'Auth\RegisterController@register');
Auth::routes();

Route::get('/intranet', function () {
	$users = App\User::all()->count();
	$studends = App\Studends::all()->count();
	$teachers = App\Teachers::all()->count();
	return view('index', compact('users','studends','teachers'));
})->middleware('auth');

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/exportar', function(){
	return Excel::download(new UsersExport, 'users.csv');
});