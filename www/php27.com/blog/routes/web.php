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

Route::get('/products', 'Products\ProductsController@index')->name('products');
Route::get('/products/create', 'Products\ProductsController@add')->name('products.add');
Route::post('/products/create', 'Products\ProductsController@PostCreate')->name('products.add');
Route::get('/shop', 'ShopController@index')->name('shop.view');


Route::middleware(['admin'])
    ->prefix('admin')
    ->group(function (){
        Route::resource('user', 'UserController');
});
