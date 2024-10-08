<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrasi', [AuthController::class, 'registrasi'])->name('registrasi');
Route::post('/peoses-login', [AuthController::class, 'prosesLogin'])->name('proses-login');


Route::middleware(['auth'])->group( function () {
    // Route admin 
    Route::middleware(['role:admin'])->group(function () {
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
