<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Middleware\EnsureUserType;

// jobs routes
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

// auth routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// profile routes
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

// company routes
Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create')->middleware(EnsureUserType::class . ':Employer');
Route::post('/company', [CompanyController::class, 'store'])->name('company.store')->middleware(EnsureUserType::class . ':Employer');
Route::get('/company/edit/{company}', [CompanyController::class, 'edit'])->name('company.edit')->middleware(EnsureUserType::class . ':Employer');
Route::put('/company/{company}', [CompanyController::class, 'update'])->name('company.update')->middleware(EnsureUserType::class . ':Employer');
Route::get('/company/{company}', [CompanyController::class, 'show'])->name('company.show')->middleware(EnsureUserType::class . ':Employer');

// home route
Route::get('/', function () {
    return view('index');
})->name('home');
