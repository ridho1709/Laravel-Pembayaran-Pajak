<?php

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



Route::get('/transaction',[TransactionController::class,'index'])->name('dashboard.transaction-manage');
Route::get('/create',[TransactionController::class,'create'])->name('transaction.create');
Route::post('/store',[TransactionController::class,'store'])->name('transaction.store');
Route::get('/edit/{id}',[TransactionController::class,'edit'])->name('dashboard.transaction-manage');
Route::post('/transaction/update', [TransactionController::class,'update'])->name('transaction.update');
Route::delete('/transactions/{id}', [TransactionController::class,'destroy'])->name('transaction.delete');
Route::get('/welcome',[TransactionController::class,'tampilan'])->name('welcome');
Route::get('/dashboard',function(){
    return view('dashboard.beranda');
});
