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

Route::group(['prefix' => 'admin'], function() {
    Auth::routes();
});

Route::get('/', 'Conferencias\HomeController@index')->name('conferencias.dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('home/usuario/{id}/conferencias', 'HomeController@usuarioConferencias');
    Route::get('home/usuario/{id}/excel', 'HomeController@generarExcel');
});

Route::group(['prefix' => 'usuarios'], function(){
    Route::get('/', 'Auth\UsuariosLoginController@showRegister'); // Mostrar formulario de registro
    Route::post('login', 'Auth\UsuariosLoginController@login'); // Validar usuario
    Route::post('guardar', 'Auth\UsuariosLoginController@store'); //Almacenar usuario
    Route::get('logout', 'Auth\UsuariosLoginController@logout'); // Usuario finalizar sesión 
});

Route::group(['middleware' => 'auth:usuario'], function() {
    Route::get('conferencias', 'Conferencias\HomeController@index');
    Route::get('conferencia/{id}/ver', 'Conferencias\HomeController@showConferencia');
});


    


