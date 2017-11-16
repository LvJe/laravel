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



Route::get('/welcome', function () {
    return 'juanjuanjuanjuan';
});

Route::get('/user/{id}', function ($id) {
    $url = route('profile', ['id' => $id]);
    return $url;
    return $url;
})->name('profile');

Route::any('login',function(){
    return view('login');
});

Route::get('/{default}',function ($default=''){
    return $default.'3';
})->where(['default'=>'[0-9a-zA-Z_/]*']);

