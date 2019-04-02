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
    return view('presentacion');
})->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('datosempresa', 'HomeController@datosempresa')
         ->name('datosempresa');

Route::post('datosempresa', 'EmpresaController@store');

Route::get('datospersonales', 'HomeController@datospersonales')
          ->name('datospersonales');

Route::post('datospersonales', 'DatosController@store');

Route::get('ingresarvigencias', 'HomeController@ingresarvigencias')
          ->name('ingresarvigencias');

Route::post('ingresarvigencias', 'VigenciasController@store');

Route::get('listaempleados', 'EmpresaController@index')
          ->name('listaempleados');

Route::get('ayuda', 'HomeController@ayuda')
          ->name('ayuda');

Route::get('listavigencias', 'VigenciasController@index')
          ->name('listavigencias');

Route::get('registro', 'HomeController@registro')
          ->name('registro');

Route::get('empleados', 'EmpresaController@index')
          ->name('/empleados');          

// rutas de pruebas

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/lista-empleados', 'HomeController@listaEmpleados')->name('listaEmpleados');
