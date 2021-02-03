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

/**
 * Verbo GET
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('listagem-usuario','UserController@listUser');


Route::group(['namespace' => 'Form'], function(){
    /**
     * verbo get
     */
    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.list');
    Route::get('usuarios2/{user}', 'TestController@listUser2')->name('users.list2');
    
    /**
     * Verbo Post
     */
    Route::post('usuarios/store', 'TestController@storeUser')->name('user.store');
    
    /**
     * verbo put
     */
    Route::put('usuarios/edit/{user}', 'TestController@edit')->name('user.edit');
    /**
     * verbo delete
     */
    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');

});
