<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// apunta al controlador de la pagina principal
Route::get('/', 'WelcomeController@index');

//login controlador
Route::resource('login','LoginController');

Route::resource('logout','LoginController@logout');

//controlador usuario
Route::get('usuario','UsuarioController@create');
Route::post('usuario','UsuarioController@store');
Route::get('usuario/index','UsuarioController@index');
Route::get('usuario/{id}/editar', 'UsuarioController@edit');
Route::put('usuario/{id}', 'UsuarioController@update');
Route::get('usuario/{id}', 'UsuarioController@show');
Route::get('usuario/{id}/eliminar', 'UsuarioController@destroy');


//controlador horario
Route::get('horario','HorarioController@create');
Route::post('horario','HorarioController@store');
Route::get('horario/index','HorarioController@index');

Route::resource('welcome','WelcomeController@show');
/*
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

*/


