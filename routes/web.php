<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'auth.login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return 'olá, dash';
    })->name('dashboard');

});
