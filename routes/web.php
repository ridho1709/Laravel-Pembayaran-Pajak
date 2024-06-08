<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/create', function () {
    return view('transaction.create');
});
Route::get('/dashboard', function () {
    return view('dashboard.beranda');
});
Route::get('/billings-manage', function () {
    return view('dashboard.billings-manage');
});
Route::get('/transaction-manage', function () {
    return view('dashboard.transaction-manage');
});

