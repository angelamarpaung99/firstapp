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
Route::resource('home','HomeController');

Route::get('/halaman-kedua', function () {
    return view('halamandua');
});

Route::get('/create', function () {
    return view('kontak_create');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');
Route::get('/home/create', 'HomeController@create');
// Route::post('/home', 'HomeController@store');
// Route::get('/home/{id}/edit', 'HomeController@edit');
// Route::put('home/{id}', 'HomeController@update');
// Route::delete('/home/{id}', 'HomeController@destroy');




