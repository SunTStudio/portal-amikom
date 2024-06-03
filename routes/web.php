<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PublicLinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login/login');
});

Route::get('/form',[LinkController::class,'create'])->name('portal.form');
Route::get('/custom',[PublicLinkController::class,'custom_link'])->name('portal.custom');
Route::get('/dashboard',[PublicLinkController::class,'dashboard'])->name('portal.dashboard');
Route::get('/akademik',[PublicLinkController::class,'akademik'])->name('portal.akademik');
Route::get('/umum',[PublicLinkController::class,'umum'])->name('portal.umum');
