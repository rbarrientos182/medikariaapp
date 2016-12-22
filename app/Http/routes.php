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

      //ruta que envia al formulario de edición del user
      Route::get('user/{id}/edit',[
        'uses' => 'UserController@getEdit',
        'as'   => 'user_show_edit_path',
      ])->where('id','[0-9]+');

      //ruta que se manda para actualizar
      Route::patch('user/{id}/edit',[
        'uses' => 'UserController@update',
        'as'   => 'user_patch_path',
      ])->where('id','[0-9]+');

      //ruta que envia al profile del user en la app
      Route::get('user/{id}/',[
        'uses' => 'UserController@index',
        'as'   => 'user_show_profile_path',
      ])->where('id','[0-9]+');

});

// ruta que manda a la vista login
Route::get('auth/login', [
  'uses' => 'AuthController@index',
  'as'   => 'auth_show_path',
]);

// ruta que se envia desde el formulario para validar user
Route::post('auth/login',[
  'uses' => 'AuthController@store',
  'as'   => 'auth_store_path',
]);

// ruta para destruir sesión del user
Route::get('auth/logout',[
  'uses' => 'AuthController@destroy',
  'as'   => 'auth_destroy_path',
]);

// ruta que manda a la vista registrate
Route::get('auth/register', [
  'uses' => 'AuthController@getRegister',
  'as'   => 'auth_show_register_path',
]);

// ruta que se envia desde el formulario para registrar un nuevo user
Route::post('auth/register',[
  'uses' => 'AuthController@create',
  'as'   => 'auth_create_path',
]);

// ruta que manda a la vista de registro completado
Route::get('auth/register/completed',[
  'uses' => 'AuthController@getCompleted',
  'as'   => 'auth_show_completed_path',
]);
