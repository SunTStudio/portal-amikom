<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login/login');
});

Route::get('/form',[LinkController::class,'create'])->name('portal.form');
