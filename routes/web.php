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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/county-utena', 'UtenaController@index')->name('utena');
Route::get('/create-structure', 'UtenaController@create')->middleware('IsAdmin');
Route::post('/store-utena', 'UtenaController@store')->name('utena-store')->middleware('IsAdmin');
Route::get('/show-structure/{id}', 'UtenaController@show')->name('hts-show');
Route::post('/destroy-utena/{id}', 'UtenaController@destroy')->name('destroy-utena')->middleware('IsAdmin');

// Route::get('/test/{id}', 'TestController@index');
Route::post('/store-photos', 'PhotosController@store')->name('photo-store')->middleware('IsAdmin');


//Vilniaus
Route::get('/county-vilnius', 'VilniusController@index')->name('vilnius');
Route::get('/create-vilnius', 'VilniusController@create')->middleware('IsAdmin');
Route::post('/store-vilnius', 'VilniusController@store')->name('vilnius-store')->middleware('IsAdmin');
Route::get('/show-vilnius/{id}', 'VilniusController@show')->name('show-vilnius');
Route::post('/destroy-vilnius/{id}', 'VilniusController@destroy')->name('destroy-vilnius')->middleware('IsAdmin');
