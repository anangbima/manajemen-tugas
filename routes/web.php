<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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
        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('dashboard-admin');
        });
    });

    // Route user
    Route::middleware(['role:user'])->group(function () {
        Route::resource('projects', ProjectController::class)->parameters([
            'projects'  => 'project:slug'
        ]);
        Route::resource('tasks', TaskController::class);
    });
});
