<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
// 	return View('welcome');
// });

// Route::get('/', function () {
//     return redirect('login');
// });

// Route::resource('tugas', 'TugasController');
// Auth::routes();

// Route::get('/home', 'HomeController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index');

// Auth::routes();


// Auth::routes();

// Route::get('/home', 'HomeController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index');


Auth::routes();
Route::group(['middleware'=>'auth'], function(){

	Route::get('/', function () {
		return redirect('tugas');
	});
	Route::resource('tugas', 'TugasController');
	Route::get('/home', 'HomeController@index');

});