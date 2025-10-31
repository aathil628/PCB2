<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BlogController;

Route::middleware('guest:admin')->group(function () {
    Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Blog Management
    Route::resource('blogs', BlogController::class)->except(['show']);
});
