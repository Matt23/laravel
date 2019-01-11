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
	echo "hola!";
    return view('welcome');
});

Route::get('/users', ['uses' => 'UsersController@index']);

Route::post('/createusers', ['uses' => 'UsersController@createUsers']);
