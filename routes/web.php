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


Route::get('/home','user\MainController@home')->name('home');
Route::get('/work','user\MainController@work')->name('work');
Route::get('/about','user\MainController@about')->name('about');
Route::get('/contact','user\MainController@contact')->name('contact');
