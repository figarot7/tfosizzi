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
/*Inicio*/
Route::get('/', function () {
    return view('inicio');
});
/*UsuarioController*/
Route::get('/usuario/login', 'UsuarioController@login');
Route::get('/usuario/logout', 'UsuarioController@logout');
Route::post('/usuario/autenticar', 'UsuarioController@autenticar');
Route::get('/usuario/crear', 'UsuarioController@crear');
Route::get('/usuario/registrarse', 'UsuarioController@registrarse');
Route::get('/usuario/calendario', 'UsuarioController@calendario');
Route::post('/usuario/almacenar', 'UsuarioController@almacenar');
Route::get('/usuario/lista', 'UsuarioController@lista');
Route::get('/usuario/eliminar/{id}', 'UsuarioController@eliminar');
Route::get('/usuario/editar/{id}', 'UsuarioController@editar');
Route::post('/usuario/actualizar/{id}', 'UsuarioController@actualizar');
/*LibroController*/
Route::get('/libro/crear', 'LibroController@crear');
Route::post('/libro/almacenar', 'LibroController@almacenar');
Route::get('/libro/lista', 'LibroController@lista');
Route::get('/libro/eliminar/{id}', 'LibroController@eliminar');
Route::get('/libro/editar/{id}', 'LibroController@editar');
Route::post('/libro/actualizar/{id}', 'LibroController@actualizar');
Route::get('/libro/ver/{id}', 'LibroController@ver');

Route::get('/libro/archivoPdf/{id}', 'LibroController@archivoPdf');


/*SuscripcionController*/
Route::get('suscripcion/listaS', 'SuscripcionController@listaS');
Route::get('suscripcion/listaNS', 'SuscripcionController@listaNS');
Route::get('suscripcion/suscribir/{id}', 'SuscripcionController@suscribir');

/*AmbienteController*/
Route::get('/ambiente/lista', 'AmbienteController@lista');
Route::get('/ambiente/crear', 'AmbienteController@crear');
Route::post('/ambiente/guardar', 'AmbienteController@guardar');
Route::get('/ambiente/eliminar/{id}', 'AmbienteController@eliminar');
Route::get('/ambiente/editarForm/{id}', 'AmbienteController@editarForm');//mostrar formulario
Route::post('/ambiente/editar/', 'AmbienteController@editar');//editar en la base de datos

/*ReservaController*/
Route::get('/reserva/crear', 'ReservaController@crear');
Route::post('/reserva/guardar', 'ReservaController@guardar');
Route::get('/reserva/lista', 'ReservaController@lista');
//
Route::get('/rol/crear', 'RolController@crear');
Route::post('/rol/guardar', 'RolController@guardar');