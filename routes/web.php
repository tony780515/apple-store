<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/searchlist', function () {
//     return view('searchlist');
// });

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/shoppingcart', 'App\Http\Controllers\CartController@index');
Route::get('/shoppingcart/store/{id}', 'App\Http\Controllers\CartController@store');
Route::get('/shoppingcart/add/{id}', 'App\Http\Controllers\CartController@add');
Route::get('/shoppingcart/minus/{id}', 'App\Http\Controllers\CartController@minus');
Route::get('/shoppingcart/destroy/{id}', 'App\Http\Controllers\CartController@destroy');

Route::get('/orderlist/{id}', 'App\Http\Controllers\OrderController@show')->name('orderlist');
Route::post('/orderlist/store', 'App\Http\Controllers\OrderController@store');

Route::get('/searchlist', 'App\Http\Controllers\ProductController@search');

