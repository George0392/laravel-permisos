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

Route::get('/graficas-plantilla', function () {
    return view('graficas-plantilla');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Rutas con Permisos
Route::group(['middleware' => ['role:Super-Admin|Editor|Moderador']], function() {
    Route::resource('usuarios', 'UserController');
});