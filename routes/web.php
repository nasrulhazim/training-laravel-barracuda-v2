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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/invoices', 'InvoiceController');

Route::get('/api/user', function () {
	$user = \App\User::first();
	// return $user;
	// return response()->json($user);
	// return response()->json($user->toArray());
	// return response()->json([
	// 	'data' => $user,
	// 	'message' => '',
	// 	'code' => 200
	// ]);
	return response()->api($user);
});

Route::get('/api/search/{keyword}', function () {
	$user = \App\User::first();
	
	return response()->api($user);
});

Route::view('laravel-mix', 'mix');
