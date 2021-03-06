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
      Route::get('/home',[
      'uses'  => 'Admin\HomeController@index',
      'as'    => 'home_show_path',
      ]);

      //ruta que manda a actualizar la imagen de perfil
      Route::patch('home/user/{id}/photoedit',[
        'uses' => 'Admin\UserController@updatePhoto',
        'as'   => 'user_photo_patch_path',
      ])->where('id','[0-9]+');

      //ruta que se manda para actualizar
      Route::patch('home/user/{id}/edit',[
        'uses' => 'Admin\UserController@update',
        'as'   => 'user_patch_path',
      ])->where('id','[0-9]+');

      //ruta que envia al formulario de edición del user
      Route::get('home/user/{id}/photoedit',[
        'uses' => 'Admin\UserController@getEditPhoto',
        'as'   => 'user_show_photoedit_path',
      ])->where('id','[0-9]+');

      //ruta que envia al profile del user en la app
      Route::get('home/user/{id}',[
        'uses' => 'Admin\UserController@index',
        'as'   => 'user_show_profile_path',
      ])->where('id','[0-9]+');

      //ruta para mostrar el formulario de alta del paciente
      Route::get('home/paciente/{id}/create',[
        'uses' => 'Admin\PacienteController@getCreate',
        'as'   => 'paciente_show_create_path'
      ])->where('id','[0-9]+');

      //ruta para guardar al paciente creado
      Route::post('home/paciente/{id}/create',[
        'uses' => 'Admin\PacienteController@create',
        'as'   => 'paciente_create_path'
      ])->where('id','[0-9]+');

      //ruta para mostrar el formulario de edición del paciente
      Route::get('home/paciente/{idpaciente}/{editar}/update',[
        'uses' => 'Admin\PacienteController@getUpdate',
        'as'   => 'paciente_show_update_path'
      ])->where(['id' =>'[0-9]+', 'editar' => '[0-9]+']);

      //ruta para  editar al paciente
      Route::patch('home/paciente/{idpaciente}/update',[
        'uses' => 'Admin\PacienteController@update',
        'as'   => 'paciente_patch_path',
      ])->where('id','[0-9]+');

      //ruta para  editar foto del paciente
      Route::patch('home/paciente/{idpaciente}/updateFoto',[
        'uses' => 'Admin\PacienteController@updateFoto',
        'as'   => 'paciente_photo_patch_path',
      ])->where('id','[0-9]+');


      //ruta para mostrar a los pacientes
      Route::get('home/paciente/{id}',[
        'uses' => 'Admin\PacienteController@index',
        'as'   => 'paciente_show_path',
      ])->where('id','[0-9]+');

      /**
      * Ruta ajax
      **/
      //Route::resource('pacientes','Admin\PacienteController');
      Route::get('pacientes/{id}','Admin\PacienteController@getPacientes');
      Route::get('medicamentos/{id}','Admin\RecetaController@findMedicamento');


      //ruta para crear una receta (Diagnóstico)
      Route::get('home/diagnostico/{id}',[
        'uses' => 'Admin\RecetaController@index',
        'as'   => 'diagnostico_show_path',
      ])->where('id','[0-9]+');

      //ruta para mandar a la vista de cotización e impresión de receta (Diagnóstico)
      Route::get('home/diagnostico/{id}/receta/{idreceta}',[
        'uses' => 'Admin\RecetaController@showReceta',
        'as'   => 'diagnostico_show_receta_path',
      ])->where('id','[0-9]+');

      Route::get('home/diagnostico/{id}/printreceta/{idreceta}',[
        'uses' => 'Admin\RecetaController@printReceta',
        'as'   => 'diagnostico_show_print_path',
      ])->where('id','[0-9]+');

      Route::get('home/diagnostico/{id}/pdfreceta/{idreceta}',[
        'uses' => 'Admin\RecetaController@pdfReceta',
        'as'   => 'diagnostico_show_pdf_path',
      ])->where('id','[0-9]+');

      //ruta para llenar la tabla de receta
      Route::post('recetas/{id}',[
        'uses' => 'Admin\RecetaController@makeReceta',
        'as'   => 'receta_ajax_path',]);

      //ruta para guardar la receta en la db
      Route::get('recetas/save','Admin\RecetaController@guardarReceta');

      Route::get('home/diagnostico/{id}/orden/{idreceta}',[
        'uses' => 'Admin\OrdenController@makeOrden',
        'as'   => 'diagnostico_show_order_path',
      ])->where('id','[0-9]+');
      /**
      * Ruta ajax
      **/
});

/***************************************************************************************/
/**
 * Rutas de los Logins y recuperacion de contraseñas
 */

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
Route::get('auth/register/completed/{nombre}',[
  'uses' => 'AuthController@getCompleted',
  'as'   => 'auth_show_completed_path',
]);



// ruta que manda a la vista de reseteo de contraseña
Route::get('password/email',[
  'uses' => 'Auth\PasswordController@getEmail',
  'as'   => 'password_show_path',
]);
// ruta que manda el email de reseteo de contraseña
Route::post('password/email',[
  'uses' => 'Auth\PasswordController@postEmail',
  'as'   => 'password_send_path',
]);
// ruta que manda a la vista de reseteo de contraseña
Route::get('password/reset/{token}',[
  'uses' => 'Auth\PasswordController@getReset',
  'as'   => 'password_token_path',
]);
// ruta que manda a la vista de reseteo de contraseña
Route::post('password/reset',[
  'uses' => 'Auth\PasswordController@postReset',
  'as'   => 'password_change_path',
]);


/************************Rutas de PayPal***************************************/

// ruta para enviar información a Paypal
Route::get('payment/{idorden}', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));

// ruta para recibir la respuesta de Paypal
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));


/*******************************************************************************/
/**
 * Rutas de las vistas de la página web
 **/

// ruta que manda a la vista de registro completado
Route::get('welcome',function () {
    return view('welcome');
});

Route::get('pdf', function(){
  $pdf = PDF::loadView('archivo');
  return $pdf->download('archivo.pdf');

});

// ruta index de la pagina web
Route::get('/',function () {
    return view('page/index');
});


/******************************************************************************/
