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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/create', 'ProductsController@add')->name('products.add');
Route::post('/products/create', 'ProductsController@PostCreate')->name('products.add');
Route::get('/shop', 'ShopController@index')->name('shop.view');

Route::resource('user', 'UserController');
