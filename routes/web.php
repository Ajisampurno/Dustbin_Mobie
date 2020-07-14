<?php

use Illuminate\Support\Facades\Route;

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

// CRUD

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/data', 'SampahController@index')->middleware('auth');

Route::get('/menabung', 'SampahController@create')->middleware('auth');

Route::post('/data', 'SampahController@store')->middleware('auth');

Route::get('/detail/{sampah}', 'SampahController@show')->middleware('auth');

Route::delete('/data/{sampah}', 'SampahController@destroy')->middleware('auth');

Route::get('/edit/{sampah}', 'SampahController@edit')->middleware('auth');

Route::patch('/data/{sampah}','SampahController@update')->middleware('auth');


