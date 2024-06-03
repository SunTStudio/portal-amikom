<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'showLoginForm'])->name('portal.login');
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::get('/form',[LinkController::class,'create'])->name('portal.form');
