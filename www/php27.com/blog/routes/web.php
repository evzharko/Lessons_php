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

Auth::routes();

Route::get('/', 'ShopController@index')->name('shop.view');

Route::get('/products', 'Products\ProductsController@index')->name('products');
Route::get('/products/create', 'Products\ProductsController@add')->name('products.add');
Route::post('/products/create', 'Products\ProductsController@PostCreate')->name('products.add');
Route::get('/shorts', 'ShopController@shorts')->name('shop.shorts');


Route::get('/{product}', 'ShopController@show')->name('shop.show');
Route::middleware(['admin'])
    ->prefix('admin')
    ->group(function (){
        Route::resource('user', 'UserController');
});
