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
//comprobamos si existe la sesión en dado caso que no se manda a area de login
Route::group(['middleware' => 'auth'],function () {
      Route::get('/',[
      'uses'  => 'Admin\HomeController@index',
      'as'    => 'home_show_path',
      ]);
});

// ruta que manda a la vista login
Route::get('auth/login', [
  'uses' => 'AuthController@index',
  'as' => 'auth_show_path',
]);

// ruta que se envia desde el formulario para validar user
Route::post('auth/login',[
  'uses' => 'AuthController@store',
  'as' => 'auth_store_path',
]);

// ruta para destruir sesión del user
Route::get('auth/logout',[
  'uses' => 'AuthController@destroy',
  'as' => 'auth_destroy_path',
]);

/*Route::get('pacientes', function () {
  return view('home');
});

Route::get('recetas', function () {
  return view('home');
});

Route::get('medicamentos', function () {
  return view('home');
});

Route::get('farmacias', function () {
  return view('home');
});

Route::get('bancos', function () {
  return view('home');
});

Route::get('datosbancarios', function () {
  return view('home');
});

Route::get('historialclinico', function () {
  return view('home');
});

Route::get('historialpagos', function () {
  return view('home');
});*/
