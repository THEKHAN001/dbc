<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Email Verification Routes
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::middleware(['auth'])->group(function () {
    // Super Admin Routes
    Route::middleware(['check.role:super_admin'])->group(function () {
        Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/churches', [App\Http\Controllers\ChurchController::class, 'index'])->name('churches.index');
        Route::get('/reports', [App\Http\Controllers\ChurchController::class, 'generateReport'])->name('reports.generate');
    });

    // Branch Admin Routes
    Route::middleware(['check.role:branch_admin'])->group(function () {
        Route::get('/dashboard/branch', [App\Http\Controllers\BranchDashboardController::class, 'index'])->name('branch.dashboard');
        Route::post('/activities', [App\Http\Controllers\ChurchActivityController::class, 'store'])->name('activities.store');
        Route::get('/activities/create', [App\Http\Controllers\ChurchActivityController::class, 'create'])->name('activities.create');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
