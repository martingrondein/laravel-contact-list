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

// Basic routing
Route::get('/', function () {
    return view('welcome');
});

// Routing via controllers
Route::resource('contact', 'ContactController');

Route::resource('city', 'CityController');