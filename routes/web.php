<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logut'])->name('logout');
Route::get('/registrasi', [AuthController::class, 'Registrasi'])->name('registrasi');

Route::middleware(['auth'])->group( function () {
    Route::middleware(['checkRole:admin'])->group(function () {
        // Route admin 
        Route::group([
            'prefix' => '/admin',
            'as'    => 'admin'
        ], function () {
            Route::get('/', [AdminController::class, 'index'])->name('dashboard-admin');
        });
    });
});

// Route admin 
// Route::group([
//     'prefix' => '/admin',
//     'as'    => 'admin'
// ], function () {
//     Route::get('/', [AdminController::class, 'index'])->name('dashboard-admin');
// });
