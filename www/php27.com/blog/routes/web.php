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
Route::get('/shorts', 'ShopController@shorts')->name('shop.shorts');
Route::get('/admin', 'AdminPanel\AdminPanelController@index')->name('admin.view');
Route::get('/{product}', 'ShopController@show')->name('shop.show');

/*
 * Админка
 * */
Route::middleware(['admin'])
    ->prefix('admin')
    ->group(function (){
        Route::resource('user', 'UserController');
        Route::get('/products', 'Products\ProductsController@index')->name('products');
        Route::get('/products/create', 'Products\ProductsController@add')->name('products.add');
        Route::get('/products/{productid}/edit', 'Products\ProductsController@edit')->name('products.edit');
        Route::post('/products/{productid}/update', 'Products\ProductsController@update')->name('products.update');
        Route::post('/products/create', 'Products\ProductsController@PostCreate')->name('products.add');
        Route::get('/products/manufacturers', 'Products\ManufactureController@index')->name('manufacturers');
        Route::post('/products/manufacturers/create', 'Products\ManufactureController@PostCreate')->name('manufacturers.add');
        Route::get('/products/manufacturers/create', 'Products\ManufactureController@add')->name('manufacturers.add');
});

