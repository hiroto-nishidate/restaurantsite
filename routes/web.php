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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('restaurant/create', 'Admin\RestaurantController@add')->middleware('auth');

//    Route::get('/contact', 'ContactController@index')->name('contact.index');
//    Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
//    Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');
});

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');

Route::get('restaurant/completed', 'UserController@completed');
Route::get('restaurant/about', 'UserController@about');
Route::get('restaurant/rule', 'UserController@rule');
Route::get('restaurant/user/option', 'UserController@option');

Route::group(['middleware' => 'auth'], function() {
   Route::get('user/index', 'Admin\UserController@index');
   Route::get('user/edit', 'Admin\UserController@edit');
   Route::post('user/edit', 'Admin\UserController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
