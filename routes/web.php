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

Route::get('/','DefaultController@index');
Route::get('/about','DefaultController@about');
Route::get('/contact','DefaultController@contactUs');

Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
