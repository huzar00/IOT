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

Route::get('/chair', function () {
    return view('chair');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/backup', function () {
    return view('welcome');
});

Route::get('firebase','FirebaseController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
