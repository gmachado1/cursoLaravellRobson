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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin', [App\Http\Controllers\AuthController::class,'dashboard'])->name('admin');
Route::get('/admin/login', [App\Http\Controllers\AuthController::class,'showLoginForm'])->name('admin.login');
Route::get('/admin/logout', [App\Http\Controllers\AuthController::class,'logout'])->name('admin.logout');
Route::post('/admin/login/do', [App\Http\Controllers\AuthController::class,'login'])->name('admin.login.do');
