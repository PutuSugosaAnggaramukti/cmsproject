<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\TransferController;



Route::get('/', [LoginController::class, 'LoginPage'])->name('login.page');
Route::get('/dashboard', [DashboardController::class, 'DashboardPage'])->name('dashboard.page'); 
Route::get('/token', [TokenController::class, 'TokenPage'])->name('token.page'); 
Route::get('/transfer',[TransferController::class,'TransferPage'])->name('transfer.page');
Route::get('/inforekrning', [InfoRekening::class,'InfoRekeningPage'])->name('infoRekening.page');