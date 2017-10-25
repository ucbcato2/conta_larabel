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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('login');
});

Route::get('registro_usuario', function () {
    return view('modulo_admin/registro_usuario');
});

Route::get('registro_cuenta', function () {
    return view('modulo_admin/registro_cuenta');
});

Route::get('listado_usuarios', function () {
    return view('modulo_admin/listado_usuarios');
});

Route::get('listado_cuenta', function () {
    return view('modulo_admin/listado_cuenta');
});

Route::get('datos_entidad', function () {
    return view('modulo_admin/datos_entidad');
});

Route::get('adicionar_gestion', function () {
    return view('modulo_admin/adicionar_gestion');
});

Route::get('apertura', function () {
    return view('modulo_admin/apertura');
});

Route::get('editar_usuario', function () {
    return view('modulo_admin/editar_usuario');
});

Route::get('registrar_ingreso', function () {
    return view('modulo_secretaria/registrar_ingreso');
});

Route::get('registrar_egreso', function () {
    return view('modulo_secretaria/registrar_egreso');
});


Route::get('registrar_inversion', function () {
    return view('modulo_secretaria/registrar_inversion');
});

Route::get('registrar_gasto', function () {
    return view('modulo_secretaria/registrar_gasto');
});


Route::get('registrar_transferencia', function () {
    return view('modulo_secretaria/registrar_transferencia');
});

Route::get('agregar_ingreso', function () {
    return view('modulo_secretaria/agregar_ingreso');
});

Route::get('agregar_egreso', function () {
    return view('modulo_secretaria/agregar_egreso');
});

Route::get('agregar_inversion', function () {
    return view('modulo_secretaria/agregar_inversion');
});

Route::get('reporte_ingresos', function () {
    return view('modulo_contador/reporte_ingresos');
});

Route::get('reporte_egresos', function () {
    return view('modulo_contador/reporte_egresos');
});

Route::get('reporte_inversion', function () {
    return view('modulo_contador/reporte_inversion');
});

Route::get('libro_mayor', function () {
    return view('modulo_contador/libro_mayor');
});

Route::get('sumas_resultados', function () {
    return view('modulo_contador/sumas_resultados');
});




