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

Route::get('/', function () {
    return view('welcome');
});


// Email related routes
Route::get('mail','MailController@index');


// Route::get('mail/send', 'MailController@send');
Route::post('mail/send', array('as' => 'send', 
    'uses' => 'MailController@send'));
