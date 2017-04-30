<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    
    return view('welcome');
});

Auth::routes();
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');
Route::resource('portal/group', 'smsGroupController');
Route::resource('contact', 'FrontendContactController');
Route::resource('portal/contact', 'smsContactController');
Route::put('portal/message/sendMessage/{message}', 'smsMessageController@sendMessage')->name('message.sendMessage') ;
Route::resource('portal/message', 'smsMessageController');

Route::get('/home', 'HomeController@index');
