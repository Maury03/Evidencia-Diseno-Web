<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('materia', 'MateriaController');
Route::resource('registro', 'RegistroController');
Route::resource('calificacion', 'CalificacionController', ['except' => ['index', 'create']]);

Route::get('calificacion.index/{id}', ['as' => 'calificacion.index', 'uses' => 'CalificacionController@index']);
Route::get('calificacion.create/{id}', ['as' => 'calificacion.create', 'uses' => 'CalificacionController@create']);
