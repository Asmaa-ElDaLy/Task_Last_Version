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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::Post('/Additem', [
    'uses' => 'ProductController@store',
    'as' => 'product.addproduct'
]);

Route::get('/add', [
    'uses' => 'ProductController@addform',
    'as' => 'product.additem'
]);

Route::get('/Normal items', [
    'uses' => 'ProductController@showitemn',
    'as' => 'product.showitemn'
]);
Route::get('/Sale items', [
    'uses' => 'ProductController@showitems',
    'as' => 'product.showitems'
]);
///////////////// Order Controller Routes/////////////

Route::get('/add-to-cart/{id}', [
    'uses' => 'Ordercontroller@addtorder',
    'as' => 'order.addtorder'
]);

Route :: get ('/Show order',[
    'uses' => 'Ordercontroller@getCart',
    'as' =>'Order.Show'
]);

Route::get('/RemoveOrder/{id}', [
    'uses' => 'Ordercontroller@deleteitem',
    'as' => 'Orderlist.del'
]);

Route::get('/RemoveAll', [
    'uses' => 'Ordercontroller@deleteCart',
    'as' => 'Orderlist.delAll'
]);
///////////////////////////////////////wishlist///////////////
Route::get('/add-to-wishlist/{id}', [
    'uses' => 'wishlistcontroller@addtorder',
    'as' => 'wishlist.addtorder'
]);

Route :: get ('/Show wishlist',[
    'uses' => 'wishlistcontroller@getCart',
    'as' =>'Wishlist.Show'
]);

Route::get('/Delete/{id}', [
    'uses' => 'wishlistcontroller@removew',
    'as' => 'wishlist.remove'
]);

Route::get('/DeleteAll', [
    'uses' => 'wishlistcontroller@deleteAll',
    'as' => 'wishlist.removeAll'
]);
