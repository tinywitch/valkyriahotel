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


Route::get('/cart', function () {
    return view('cart.index');
});


/*
Route::get('/cart', [
    'uses' => 'ServiceController@getCart',
    'as' => 'cart.index'
]);

*/


Route::post('/result', ['as'=>'postResult', 'uses'=>'HomeController@result']);
Route::get('/order/{id}/{date_in}/{date_out}/{user_id}', ['as'=>'getOrder', 'uses'=>'HomeController@order']);
Auth::routes();

Route::get('service/{id}/index', [
	'uses'=>'ServiceController@getIndex',
	'as'=>'service.index'
	]);


Route::get('/add-to-cart/{id}', [
    'uses' => 'ServiceController@getAddToCart',
    'as' => 'service.addToCart'
]);

Route::get('/service-cart', [
    'uses' => 'ServiceController@getCart',
    'as' => 'service.serviceCart'
]);







