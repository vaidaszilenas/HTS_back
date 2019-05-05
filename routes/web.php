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


//Telsiai
Route::get('/county-telsiai', 'TelsiaiController@index')->name('telsiai');
Route::get('/create-telsiai', 'TelsiaiController@create')->middleware('IsAdmin');
Route::post('/store-telsiai', 'TelsiaiController@store')->name('telsiai-store')->middleware('IsAdmin');
Route::get('/show-telsiai/{id}', 'TelsiaiController@show')->name('show-telsiai');
Route::post('/destroy-telsiai/{id}', 'TelsiaiController@destroy')->name('destroy-telsiai')->middleware('IsAdmin');


//Taurage
Route::get('/county-taurage', 'TaurageController@index')->name('taurage');
Route::get('/create-taurage', 'TaurageController@create')->middleware('IsAdmin');
Route::post('/store-taurage', 'TaurageController@store')->name('taurage-store')->middleware('IsAdmin');
Route::get('/show-taurage/{id}', 'TaurageController@show')->name('show-taurage');
Route::post('/destroy-taurage/{id}', 'TaurageController@destroy')->name('destroy-taurage')->middleware('IsAdmin');


//Siauliai
Route::get('/county-siauliai', 'SiauliaiController@index')->name('siauliai');
Route::get('/create-siauliai', 'SiauliaiController@create')->middleware('IsAdmin');
Route::post('/store-siauliai', 'SiauliaiController@store')->name('siauliai-store')->middleware('IsAdmin');
Route::get('/show-siauliai/{id}', 'SiauliaiController@show')->name('show-siauliai');
Route::post('/destroy-siauliai/{id}', 'SiauliaiController@destroy')->name('destroy-siauliai')->middleware('IsAdmin');


//Panevezys
Route::get('/county-panevezys', 'PanevezysController@index')->name('panevezys');
Route::get('/create-panevezys', 'PanevezysController@create')->middleware('IsAdmin');
Route::post('/store-panevezys', 'PanevezysController@store')->name('panevezys-store')->middleware('IsAdmin');
Route::get('/show-panevezys/{id}', 'PanevezysController@show')->name('show-panevezys');
Route::post('/destroy-panevezys/{id}', 'PanevezysController@destroy')->name('destroy-panevezys')->middleware('IsAdmin');


//Marijampole
Route::get('/county-marijampole', 'MarijampoleController@index')->name('marijampole');
Route::get('/create-marijampole', 'MarijampoleController@create')->middleware('IsAdmin');
Route::post('/store-marijampole', 'MarijampoleController@store')->name('marijampole-store')->middleware('IsAdmin');
Route::get('/show-marijampole/{id}', 'MarijampoleController@show')->name('show-marijampole');
Route::post('/destroy-marijampole/{id}', 'MarijampoleController@destroy')->name('destroy-marijampole')->middleware('IsAdmin');


//Klaipeda
Route::get('/county-klaipeda', 'KlaipedaController@index')->name('klaipeda');
Route::get('/create-klaipeda', 'KlaipedaController@create')->middleware('IsAdmin');
Route::post('/store-klaipeda', 'KlaipedaController@store')->name('klaipeda-store')->middleware('IsAdmin');
Route::get('/show-klaipeda/{id}', 'KlaipedaController@show')->name('show-klaipeda');
Route::post('/destroy-klaipeda/{id}', 'KlaipedaController@destroy')->name('destroy-klaipeda')->middleware('IsAdmin');


//Kaunas
Route::get('/county-kaunas', 'KaunasController@index')->name('kaunas');
Route::get('/create-kaunas', 'KaunasController@create')->middleware('IsAdmin');
Route::post('/store-kaunas', 'KaunasController@store')->name('kaunas-store')->middleware('IsAdmin');
Route::get('/show-kaunas/{id}', 'KaunasController@show')->name('show-kaunas');
Route::post('/destroy-kaunas/{id}', 'KaunasController@destroy')->name('destroy-kaunas')->middleware('IsAdmin');


//Alytus
Route::get('/county-alytus', 'AlytusController@index')->name('alytus');
Route::get('/create-alytus', 'AlytusController@create')->middleware('IsAdmin');
Route::post('/store-alytus', 'AlytusController@store')->name('alytus-store')->middleware('IsAdmin');
Route::get('/show-alytus/{id}', 'AlytusController@show')->name('show-alytus');
Route::post('/destroy-alytus/{id}', 'AlytusController@destroy')->name('destroy-alytus')->middleware('IsAdmin');
