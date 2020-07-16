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
    Route::get('restaurant/about', 'Admin\RestaurantController@about');
    Route::get('restaurant/rule', 'Admin\RestaurantController@rule');
//    Route::get('/contact', 'ContactController@index')->name('contact.index');
//    Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
//    Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');
});

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
