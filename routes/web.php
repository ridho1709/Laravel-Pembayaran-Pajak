<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\MpdfController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Transaction Route
Route::get('/transaction',[TransactionController::class,'index'])->name('dashboard.transaction-manage');  
Route::get('/create',[TransactionController::class,'create'])->name('transaction.create');
Route::post('/store',[TransactionController::class,'store'])->name('transaction.store');
Route::get('/edit/{id}',[TransactionController::class,'edit'])->name('dashboard.transaction-manage');
Route::post('/transaction/update', [TransactionController::class,'update'])->name('transaction.update');
Route::delete('/transactions/{id}', [TransactionController::class,'destroy'])->name('transaction.delete');
Route::get('/welcome',[TransactionController::class,'tampilan'])->name('welcome');

// Billings Route
Route::get('/billings',[BillingController::class,'index'])->name('dashboard.billings-manage');
Route::get('/billing-create',[BillingController::class,'create'])->name('billings.billing-create');
Route::post('/billing-store',[BillingController::class,'store'])->name('billings.store');
Route::get('/billings/print', [BillingController::class, 'printpdf'])->name('dashboard.print');


// Dashboard Route
Route::get('/dashboard',function(){
    return view('dashboard.beranda');
});
