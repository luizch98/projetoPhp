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

Route::get('/', 'Auth\LoginController@login');


Route::get('login', 'Auth\LoginController@login')->name('login');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('registrar', 'Auth\RegisterController@index')->name('registrar_usuario');

Route::post('registrar', 'Auth\RegisterController@registrar')->name('registrar_usuario');
