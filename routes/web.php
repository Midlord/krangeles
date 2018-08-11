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

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();


Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::get('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');


Route::group(['middleware' => ['auth']], function () {
		Route::get('/', 'HomeController@index')->name('home');
		Route::get('restaurants','Front\RestaurantController@getRestaurantList')->name('restaurant.list');
		Route::get('restaurant/{id}/info','Front\RestaurantController@getRestaurantInfo')->name('restaurant.info');
		Route::get('restaurant/{id}/info/location','Front\RestaurantController@getRestaurantLocation')->name('restaurant.info.location');
		Route::get('restaurant/{id}/info/review','Front\RestaurantController@createComment')->name('restaurant.info.comment');
		Route::post('restaurant/{id}/info/review','Front\RestaurantController@storeComment')->name('store.comment');

		
		});

		
	
Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'as' => 'admin.' ], function () {
		Route::get('/','Admin\DashboardController@index')->name('dashboard');
		Route::put('restaurant-restore/{id}','Admin\RestaurantController@rest')->name('restaurants.restore');
		Route::get('restaurants/archive','Admin\RestaurantController@archive')->name('restaurants.archive');
		Route::resource('restaurants','Admin\RestaurantController');
		Route::get('/users/delete/{id}','Admin\UserController@delete')->name('users.delete');
		Route::resource('users','Admin\UserController');
		Route::resource('employees','Admin\EmployeeController');
		Route::resource('logs','Admin\LogController');

});

