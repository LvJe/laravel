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

Route::get('/users/{id}', function (App\User $user) {
    dd($user);
})->name('profile');

/*Route::get('login',function(){
    return view('login');
});

Route::get('/{default}',function ($default=''){
    return $default.'3';
})->where(['default'=>'[0-9a-zA-Z_/]*']);*/

Auth::routes();

//ticketRoutes...
Route::get('/tickets','TicketController@showTickets')->name('ticket');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
