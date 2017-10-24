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
    return view('welcome');
});

Route::get('registro_usuario', function () {
    return view('registro_usuario');
});

Route::get('registro_cuenta', function () {
    return view('registro_cuenta');
});

Route::get('listado_usuarios', function () {
    return view('listado_usuarios');
});

Route::get('listado_cuenta', function () {
    return view('listado_cuenta');
});

Route::get('datos_entidad', function () {
    return view('datos_entidad');
});

Route::get('adicionar_gestion', function () {
    return view('adicionar_gestion');
});

Route::get('registrar_ingreso', function () {
    return view('registrar_ingreso');
});

Route::get('registrar_egreso', function () {
    return view('registrar_egreso');
});


Route::get('registrar_inversion', function () {
    return view('registrar_inversion');
});

Route::get('registrar_gasto', function () {
    return view('registrar_gasto');
});


Route::get('registrar_transferencia', function () {
    return view('registrar_transferencia');
});


