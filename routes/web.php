<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});