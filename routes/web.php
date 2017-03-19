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
    return view('home');
});

Route::get('/agents', function () {
	return view('agents');
});

Route::get('/buy', function () {
	return view('buy');
});

Route::get('/sell', function () {
	return view('sell');
});

Route::get('/rent', function () {
	return view('rent');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
