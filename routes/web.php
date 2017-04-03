<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as'=>'index', 'uses'=>'indexController@getIndex']);

Route::get('/get-order-form', ['as'=>'order-form', 'uses'=>'indexController@getOrderPlaceForm']);


Route::get('/order-places', ['as'=>'order-places', 'uses'=>'indexController@orderPlaces']);


Route::get('/get-movie-times', ['as'=>'get-movie-times', 'uses'=>'indexController@getMovieTimes']);

Route::get('/real', ['as'=>'real', 'uses'=>'indexController@real']);
