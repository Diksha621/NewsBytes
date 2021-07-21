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
Route::get("/", function(){
   return View::make("welcome");
});

Route::get('create-url-hash', 'UrlHashController@index');

Route::post('create-url-hash', 'UrlHashController@store')->name('create.hash.link');

Route::get('{hash}', 'UrlHashController@displayLink')->name('hash.link');
