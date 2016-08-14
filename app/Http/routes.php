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

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

]);

Route::group(['middleware'=>['auth','administrador'],'prefix'=>'administrador'],function(){

    Route::get('/',function (){

        return view('Administrador.index');
    });

});

Route::group(['middleware'=>['auth','preparador'],'prefix'=>'preparador'],function(){

    Route::get('/',function (){

        return view('Preparador.index');
    });

});

Route::group(['middleware'=>['auth','boxeador'],'prefix'=>'boxeador'],function(){

    Route::get('/',function (){

        return view('Boxeador.index');
    });

});




//login controlador
//Route::resource('login','LoginController');


//Route::resource('logout','LoginController@logout');


//Route::resource('welcome','WelcomeController@show');






