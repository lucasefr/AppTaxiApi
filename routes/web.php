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




//Route::get('/usuarios', 'UsuarioController@index');
//Route::post('/usuarios', 'UsuarioController@create');

//Route::get('/testDrives', 'TestDriveController@index');
//Route::post('/testDrives', 'TestDriveController@create');

//Route::get('/concessionarias', 'ConcessionariaController@index');
//Route::post('/concessionarias', 'ConcessionariaController@create');
