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

Route::get('/','HomeController@index');

Route::get('detail/{id}', function ($id) {
    $datas=[
        [
            'id' => '1',
            'name' => 'Apple',
            'description' => 'Welcome Apple !',
        ],
        [
            'id' => '2',
            'name' => 'Samsung',
            'description' => 'Welcome Samsung !',
        ],
        [
            'id' => '3',
            'name' => 'Sony',
            'description' => 'Welcome Sony !',
        ],
    ];
    $datafound = null;
    $message = null;
    foreach ($datas as $data) {
        if ($data['id'] == $id) {
            $datafound = $data;
        } else {
            $message = 'Not Found!';
        }
    }
    return view('detail', compact('datafound'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', 'ProfileController@index');