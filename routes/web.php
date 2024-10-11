<?php

use App\Http\Controllers\Admin\MemberProjectController as AdminMemberProjectController;
use App\Http\Controllers\Admin\MemberTaskController as AdminMemberTaskController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
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
Route::post('/peoses-registrasi', [AuthController::class, 'prosesRegistrasi'])->name('proses-registrasi');


Route::middleware(['auth'])->group( function () {
    // Route admin 
    Route::middleware(['role:admin'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('dashboard-admin');
            Route::resource('projects', AdminProjectController::class)->parameters([
                'projects'      => 'project:slug'
            ]);
            Route::resource('member-project', AdminMemberProjectController::class)->only([
                'store', 'destroy'
            ]);
            Route::resource('member-task', AdminMemberTaskController::class)->only([
                'store', 'destroy'
            ]);
        });
    });

    // Route user
    Route::middleware(['role:user'])->group(function () {
        // Route::resource('projects', ProjectController::class)->parameters([
        //     'projects'  => 'project:slug'
        // ]);
        // Route::resource('tasks', TaskController::class);
    });
});
