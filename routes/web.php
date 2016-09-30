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

Route::get('/homepage', function () {
    return view('fashion.index');
});

Route::get('/account', function () {
    return view('fashion.account');
});

Route::get('/cart', function () {
    return view('fashion.cart');
});

Route::get('/collection', function () {
    return view('fashion.collection');
});

Route::get('/contact-us', function () {
    return view('fashion.contact-us');
});

Route::get('/detail', function () {
    return view('fashion.detail');
});

Route::get('/register', function () {
    return view('fashion.register');
});

Route::get('/wishlist', function () {
    return view('fashion.wishlist');
});
