<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/forgot-password', 'auth.forgot-password')->name('forgot-password');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return 'olá, dash';
    })->name('dashboard');

});
