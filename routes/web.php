<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login/login');
});

Route::get('/coba', function () {
    return view('coba');
});