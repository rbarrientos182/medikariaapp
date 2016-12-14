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

Route::get('/', function () {
    return view('home');
});

Route::get('auth/login', [
  'uses' => 'AuthController@index',
  'as' => 'auth_show_path',
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
