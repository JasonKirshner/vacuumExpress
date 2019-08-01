<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('login', 'LoginController@authenticate');
Route::post('register', 'RegisterController@');
Route::get('users/{id}', 'UserController@show');
Route::put('users/{id}', 'UserController@update');

Route::get('products', 'ProductController@index');
Route::post('products', 'ProductController@store');
Route::get('products/{id}', 'ProductController@show');
Route::put('products/{id}', 'ProductController@update');

Route::get('carts', 'CartController@index');
Route::post('carts', 'CartController@store');
Route::get('carts/{id}', 'CartController@show');
Route::put('carts/{id}', 'CartController@update');

Route::get('cart-items', 'CartItemController@index');
Route::post('cart-items', 'CartItemController@store');
Route::get('cart-items/{id}', 'CartItemController@show');
Route::put('cart-items/{id}', 'CartItemController@update');
