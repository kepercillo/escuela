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
Route::get('/alumnonuevo', function() {
    return view('alumnonuevo');
});

route::ApiResource('/materias', 'MateriasController');
Route::ApiResource('/alumno', 'AlumnosController');
Route::get('/materia/delete/{id}', ['as' => 'materia/delete', 'uses' => 'MateriasController@destroy']);
Route::get('/materia/editar/{id}', ['as' => 'materia/editar', 'uses' => 'MateriasController@show']);
Route::post('/materias/guardar/{id}', 'MateriasController@update');
