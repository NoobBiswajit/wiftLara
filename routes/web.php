<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signin', function () {
    return view('signin');
});