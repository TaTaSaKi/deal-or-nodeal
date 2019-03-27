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
Route::get('','HomeController@index')->name('home');
Route::group(['prefix' => 'post'], function (){
    Route::get('create','PostController@create')->name('post.create');
    Route::post('store','PostController@store')->name('post.store');
    Route::get('show/{id}','PostController@show')->name('post.show');
    Route::get('edit','PostController@edit')->name('post.edit');
    Route::post('update','PostController@edit')->name('post.update');
    Route::get('delete','PostController@destroy')->name('post.delete');
});