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

  Route::get('/login', function () {
    return view('home');
});

Route::get('/Pacientes', function () {
  return view('home');
});

Route::get('/Recetas', function () {
  return view('home');
});

Route::get('/Medicamentos', function () {
  return view('home');
});

Route::get('/Farmacias', function () {
  return view('home');
});

Route::get('/Bancos', function () {
  return view('home');
});

Route::get('/DatosBancarios', function () {
  return view('home');
});

Route::get('/HistorialClinico', function () {
  return view('home');
});

Route::get('/HistorialPagos', function () {
  return view('home');
});
