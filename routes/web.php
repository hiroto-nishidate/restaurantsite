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

Route::get('/about', 'UserController@about'); // /aboutに変更
Route::get('/rule', 'UserController@rule'); // /ruleに変更
Route::get('/user/option', 'UserController@option'); // /user/optionに変更
Route::get('/loginafter', 'UserController@loginafter'); // loginに変更
Route::get('/registerafter', 'UserController@registerafter');
Route::get('restaurant', 'UserController@restaurant');

Route::group(['middleware' => 'auth'], function() {
   Route::get('user/index', 'Admin\UserController@index');
   Route::get('user/edit', 'Admin\UserController@edit');
   Route::get('user/change_completed', 'Admin\UserController@change_completed');
   Route::post('user/edit', 'Admin\UserController@update');
   Route::get('restaurant/user/reviews/create', 'Admin\NewpostController@showCreateForm')->name('restaurant.user.create');
   Route::post('restaurant/user/reviews/create', 'Admin\NewpostController@create');   
   Route::get('restaurant/user/profiles/create', 'Admin\NewpostController@index');
   Route::get('restaurant/user/edit', 'Admin\NewpostController@edit'); // 追記
   Route::post('restaurant/user/edit', 'Admin\NewpostController@update'); // 追記
   Route::get('restaurant/user/profiles/delete', 'Admin\NewpostController@delete'); // 追記
   Route::get('restaurant/kadai/create', 'Admin\KadaiController@add'); //課題1
   Route::get('restaurant/kadai/create2', 'Admin\Kadai2Controller@add'); //課題2
   Route::get('restaurant/kadai/create3', 'Admin\Kadai3Controller@add'); //課題3
   Route::get('restaurant/kadai/create4', 'Admin\Kadai4Controller@add'); //課題4
   Route::get('restaurant/kadai/index', 'Admin\KadaiController@index'); //課題1
});

Route::get('/shops', 'ShopController@index')->name('shop.list'); 
Route::get('/shop/new', 'ShopController@create')->name('shop.new'); 
Route::post('/shop', 'ShopController@store')->name('shop.store'); 
Route::get('/shop/edit/{id}','ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}','ShopController@update')->name('shop.update');

Route::get('/shop/{id}', 'ShopController@show')->name('shop.detail'); 
Route::delete('/shop/{id}', 'ShopController@destroy')->name('shop.destroy'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
