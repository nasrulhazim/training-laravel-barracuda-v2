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

Route::get('/home', 'HomeController@index')
	->middleware('active')
	->name('home');
	
Route::middleware('active', 'auth')
	->resource('/invoices', 'InvoiceController');

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

Route::get(
	'account/activate/{token}', 
	'Auth\ActivationController@activate'
)->name('account.activate');

Route::get(
    'account/activation/request',
    'Auth\ActivationController@request'
)->name('account.activation.request');

Route::post(
    'account/resend/activation',
    'Auth\ActivationController@resend'
)->name('account.activation.resend');

Route::view('notifications', 'notifications')->name('notifications');

Route::get('notifications/mark-as-read/{id}', function($id) {
	auth()->user()->notifications()->where('id', $id)->update([
		'read_at' => now()
	]);
	return redirect()->route('notifications');
})->name('notifications.mark-as-read');
