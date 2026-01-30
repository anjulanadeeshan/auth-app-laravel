<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register.store');
Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');