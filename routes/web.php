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



Route::get('/usuario/{id}', "UserController@show");
Route::get('/endereco/{address}', "AddressController@show");
Route::get('/artigos/{post}', "PostController@show");
Route::get('/categoria/{category}', "CategoryController@show");
