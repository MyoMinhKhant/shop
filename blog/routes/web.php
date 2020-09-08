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

Route::get('/','PageController@mainfun')->name('mainpage');

Route::get('about','PageController@aboutfun')->name('aboutpage');

Route::get('contact','PageController@contactfun')->name('contactpage');

Route::get('service','PageController@servicefun')->name('servicepage');

Route::get('testing/{id}/{name}','PageController@testingfun')->name('testingpage');
