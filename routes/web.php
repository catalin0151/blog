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

Route::get('/', 'PostController@index');
//Route::prefix('users')->group(function(){
//    Route::get('/', 'UserController@index')->name('users.index');
//    Route::get('/create', 'UserController@create')->name('users.create');
//    Route::post('/', 'UserController@store')->name('users.store');
//    Route::prefix('/{user}')->group(function() {
//        Route::get('/', 'UserController@show')->name('users.show');
//        Route::get('/edit', 'UserControler@edit')->name('users.edit');
//        Route::put('/','UserController@update')->name('users.update');
//        Route::delete('/', 'UserController@delete')->name('users.delete');
//    });
//
//});
Route::resource('users', 'UserController');
Route::prefix('users')->group(function() {
   Route::get('/edit-password/{id}', 'UserController@editPassword')->name('users.edit-password');
   Route::put('/update-password/{id}', 'UserController@updatePassword')->name('users.update-password');
});
Auth::routes();
