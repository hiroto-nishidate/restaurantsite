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

});

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');

Route::get('restaurant/completed', 'UserController@completed');
Route::get('restaurant/about', 'UserController@about');
Route::get('restaurant/rule', 'UserController@rule');
Route::get('restaurant/user/option', 'UserController@option');
Route::get('restaurant/user/login', 'UserController@login');
Route::get('restaurant/user/register', 'UserController@register');
Route::get('restaurant/user/account_delete_completed', 'UserController@account_delete_completed');
Route::get('restaurant/user/delete_confirm', 'UserController@delete_confirm');
Route::get('restaurant', 'UserController@restaurant');

Route::group(['middleware' => 'auth'], function() {
   Route::get('user/index', 'Admin\UserController@index');
   Route::get('user/edit', 'Admin\UserController@edit');
   Route::get('user/change_completed', 'Admin\UserController@change_completed');
   Route::post('user/edit', 'Admin\UserController@update');
   Route::get('restaurant/user/newpost', 'Admin\NewpostController@showCreateForm')->name('restaurant.user.create');
   Route::post('restaurant/user/newpost', 'Admin\NewpostController@create');
   Route::get('restaurant/user/mypage/{mypage}', 'Admin\NewpostController@mypage');
   Route::get('restaurant/user/edit', 'Admin\NewpostController@edit'); // 追記
   Route::post('restaurant/user/edit', 'Admin\NewpostController@update'); // 追記
   Route::get('restaurant/user/delete', 'Admin\NewpostController@delete'); // 追記
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
