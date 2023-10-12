<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/account', function () {
    return view('account');
});
Route::get('/blog-archive', function () {
    return view('blog-archive');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product-detail', function () {
    return view('product-detail');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});