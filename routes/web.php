<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\InfoRekeningController;
use App\Http\Controllers\PembayaranTagihanController;


Route::get('/', [LoginController::class, 'LoginPage'])->name('login.page');
Route::get('/dashboard', [DashboardController::class, 'DashboardPage'])->name('dashboard.page'); 
Route::get('/token', [TokenController::class, 'TokenPage'])->name('token.page'); 

//TransferPageRoute
Route::get('/transfer',[TransferController::class,'TransferPage'])->name('transfer.page');
Route::get('/transferreklain',[TransferController::class,'TransferRekLainPage'])->name('transferreklain.page');
Route::get('/transfersknrtgs',[TransferController::class,'TransferSKNRTGSPage'])->name('transfersknrtgs.page');
Route::get('/atmbersamaprima',[TransferController::class,'TransferAtmBersamaPrimaPage'])->name('transferatmbersamaprima.page');

//InformasiRekeningPageRoute
Route::get('/inforekening', [InfoRekeningController::class,'InfoRekeningPage'])->name('infoRekening.page');


//PembayaranTagihanPage
Route::get('/pembayarantagihan', [PembayaranTagihanController::class, 'pembayaranTagihanPage'])->name("pembayaranTagihan.page");