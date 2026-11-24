<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

oute::get('/about me', function () {
    return view('about me');
})->name('aboutme');



