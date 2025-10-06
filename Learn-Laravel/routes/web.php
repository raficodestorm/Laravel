<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact', 'contacting');

Route::get('/abouting', function () {
    return view('about');
});

Route::get('/test/{id?}', function (string $id) {
    if ($id) {
        return "<h1>Your ID : " . $id . "</h1>";
    } else {
        return "<h1>No ID found</h1>";
    }
});
