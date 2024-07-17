<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\Mda\MilestoneController;
use App\Http\Controllers\Mda\TargetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthenticateController::class, 'index'])->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards');
});

Route::group(['middleware' => ['auth', 'role:mda']], function(){
    Route::resource('targets', TargetController::class);
    Route::resource('milestones', MilestoneController::class);
});