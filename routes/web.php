<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index'); 
});

Route::get('/welcome', function () {
    return view('welcome'); //merujuk ke file welcome di folder resources
});

Route::get('/login', function () {
    return view('login'); 
});

Route::get('/about', function () {
    return view('about'); 
});