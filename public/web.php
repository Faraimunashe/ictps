<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/google-login', [LoginController::class, 'store'])->name('google-login');
Route::get('/google-auth/callback', [LoginController::class,'callback'])->name('google-callback');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

   // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
