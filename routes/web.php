<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PublicLinkController;
use Illuminate\Support\Facades\Route;

// Rute untuk login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('portal.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Rute yang dilindungi dengan middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/form', [PublicLinkController::class, 'form'])->name('portal.form');
    Route::get('/custom', [PublicLinkController::class, 'custom_link'])->name('portal.custom');
    Route::get('/custom-create', [PublicLinkController::class, 'create'])->name('portal.create');
    Route::get('/dashboard', [PublicLinkController::class, 'dashboard'])->name('portal.dashboard');
    Route::get('/akademik', [PublicLinkController::class, 'akademik'])->name('portal.akademik');
    Route::get('/umum', [PublicLinkController::class, 'umum'])->name('portal.umum');
    Route::get('/logout', [AuthController::class, 'logout'])->name('portal.logout');
});