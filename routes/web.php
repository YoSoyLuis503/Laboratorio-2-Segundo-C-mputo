<?php

use Illuminate\Support\Facades\Route;

Route::get('/nayik', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

