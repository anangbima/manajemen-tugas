<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'signIn'])->name('sign-in');
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('sign-in');
Route::get('/sign-out', [AuthController::class, 'signOut'])->name('sign-out');
Route::get('/sign-up', [AuthController::class, 'signUp'])->name('sign-up');

Route::group([
    'prefix' => '/admin',
    'as'    => 'admin'
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard-admin');
});
