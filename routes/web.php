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
    return view('pages.home');
});

Route::get('/account', function () {
    return view('pages.account');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/collection', function () {
    return view('pages.collection');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/detail', function () {
    return view('pages.detail');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/wishlist', function () {
    return view('pages.wishlist');
});
