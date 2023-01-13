<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'index']);
Route::get('/detailproduct', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

// Auth Route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot', [AuthController::class, 'forgot']);

// Pages Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');