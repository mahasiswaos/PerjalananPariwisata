<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//login

Route::get('/login', 'App\\Controllers\\LoginController@login');
Route::post('/login/proses', 'App\\Controllers\\LoginController@prosesLogin');

// bus

Route::get('/', 'App\\Controllers\\HomeController@index');

Route::get('/admin', 'App\\Controllers\\AdminController@index');

Route::get('/admin/bus', 'App\\Controllers\\BusController@index');

Route::get('/bus/insert', 'App\\Controllers\\BusController@insert');

Route::get('/bus/insert/proses', 'App\\Controllers\\BusController@prosesInsert');

Route::get('/bus/update/{id}', 'App\\Controllers\\BusController@update');

Route::get('/bus/update/proses/{id}', 'App\\Controllers\\BusController@prosesUpdate');

Route::get('/bus/delete/{id}', 'App\\Controllers\\BusController@prosesDelete');

// supir
Route::get('/admin/supir','App\\Controllers\\SupirController@view');
Route::get('/supir/insert','App\\Controllers\\SupirController@insert');
Route::get('/insert/proses','App\\Controllers\\SupirController@prosesInsert');
Route::get('/supir/delete/{id}','App\\Controllers\\SupirController@delete');
Route::get('/supir/update/{id}','App\\Controllers\\SupirController@update');
Route::get('/update/proses/{id}','App\\Controllers\\SupirController@prosesUpdate');

// perjalanan


Route::get('/admin/perjalanan', 'App\\Controllers\\PerjalananController@tampil');
Route::get('/perjalanan/insert', 'App\\Controllers\\PerjalananController@insert');
Route::get('/perjalanan/insert/proses', 'App\\Controllers\\PerjalananController@prosesinsert');
Route::get('/perjalanan/delete/{id}', 'App\\Controllers\\PerjalananController@delete');

