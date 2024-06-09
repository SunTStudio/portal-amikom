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
    // Custom
    Route::get('/custom', [PublicLinkController::class, 'custom_link'])->name('portal.custom');
    Route::get('/custom/search', [PublicLinkController::class, 'customSearch'])->name('portal.custom.search');
    Route::get('/custom/{kategori}', [PublicLinkController::class, 'customKategori'])->name('portal.custom.kategori');
    Route::get('/custom/edit/{id}', [PublicLinkController::class, 'edit'])->name('portal.custom.edit');
    Route::get('/custom/delete/{id}', [PublicLinkController::class, 'destroy'])->name('portal.custom.delete');
    Route::get('/custom/update/{id}', [PublicLinkController::class, 'update'])->name('portal.custom.update');
    Route::get('/custom-create', [PublicLinkController::class, 'create'])->name('portal.create');

    // Dashboard
    Route::get('/dashboard', [PublicLinkController::class, 'dashboard'])->name('portal.dashboard');

    // Akademik
    Route::get('/akademik', [PublicLinkController::class, 'akademik'])->name('portal.akademik');
    Route::get('/akademik/search', [PublicLinkController::class, 'akademikSearch'])->name('portal.akademik.search');

    // Umum
    Route::get('/umum', [PublicLinkController::class, 'umum'])->name('portal.umum');
    Route::get('/umum/search', [PublicLinkController::class, 'umumSearch'])->name('portal.umum.search');

    Route::get('/logout', [AuthController::class, 'logout'])->name('portal.logout');
});