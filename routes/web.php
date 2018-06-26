<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/usuario', 'UsuarioController\\UsuarioController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/cliente', 'Controladores\\ClienteController');
Route::resource('admin/estado', 'Controladores\\EstadoController');
Route::resource('admin/personal', 'Controladores\\PersonalController');
Route::resource('admin/mascota', 'Controladores\\MascotaController');
Route::resource('admin/servicio', 'Controladores\\ServicioController');
Route::resource('admin/promocion', 'Controladores\\PromocionController');
Route::resource('admin/ficha', 'Controladores\\FichaController');
Route::resource('admin/detalle', 'Controladores\\DetalleController');
Route::resource('admin/tratamiento', 'Controladores\\TratamientoController');

Route::get('admin/fichaD/{idF}', 'Controladores\\FichaController@detalle');