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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/accommodation', 'AccommodationController@index');
Route::get('/apartment', 'ApartmentController@index');
Route::get('/event', 'EventController@index');
Route::get('/restaurant', 'RestaurantController@index');

Auth::routes();

Route::get('customer/{id}/index', 'CustomerServiceController@index');
