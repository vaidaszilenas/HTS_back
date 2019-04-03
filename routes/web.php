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

Route::get('/', 'BasicController@index')->name('basic');

Auth::routes();
// ->middleware('IsAdmin')
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/county-utena', 'UtenaController@index')->name('utena');
Route::get('/create-structure', 'UtenaController@create');
Route::post('/store', 'UtenaController@store')->name('utena-store');
