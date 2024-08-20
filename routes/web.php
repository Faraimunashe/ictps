<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MdaController;
use App\Http\Controllers\Admin\QuarterController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\ChangePasswordController;
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

Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('change-password');
Route::post('/change-password', [ChangePasswordController::class, 'store'])->name('change-password');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthenticateController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards');

    Route::resource('users', UserController::class);
    Route::resource('quarters', QuarterController::class);
    Route::resource('mdas', MdaController::class);
    Route::resource('active-quarter-targets', \App\Http\Controllers\Admin\TargetController::class);
});

Route::group(['middleware' => ['auth', 'role:mda']], function(){
    Route::resource('targets', TargetController::class);
    Route::post('/target/progress/{target_id}', [TargetController::class, 'update_progress']);
    Route::get('/target/progress/{target_id}', [TargetController::class, 'progress']);
    Route::resource('milestones', MilestoneController::class);
});
