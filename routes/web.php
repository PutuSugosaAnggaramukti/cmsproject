<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TokenController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'LoginPage'])->name('login.page');
Route::get('/dashboard', [DashboardController::class, 'DashboardPage'])->name('dashboard.page'); 
Route::get('/token', [TokenController::class, 'TokenPage'])->name('token.page'); 