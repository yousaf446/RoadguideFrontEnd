<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/listing', function () {
    return view('listing');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/login', function () {
    return view('login');
});

// Admin routes

Route::group(['prefix' => 'admin', 'middleware' => ['verify.session', 'web']], function(){
    Route::get('/', function () {
        return view('admin.index');
    });
});
