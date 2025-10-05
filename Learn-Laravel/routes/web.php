<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacting', function () {
    return view('contact');
});

Route::get('/abouting', function () {
    return view('about');
});
