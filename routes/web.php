<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cepat');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/kasir', function () {
    return view('kasir');
});

Route::get('/stok', function () {
    return view('stok');
});

Route::get('/penjualan', function () {
    return view('penjualan');
});

Route::get('/member', function () {
    return view('member');
});