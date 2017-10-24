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
    return view('welcome');
});
Route::model('usuarios', 'Usuario');
Route::resource('listado_usuarios','VistaUsuarioController');
App::before(function($request)
{
	// Cargamos la configuración del sitio
    View::share('usuarios', VistaUsuarioController::index());
});