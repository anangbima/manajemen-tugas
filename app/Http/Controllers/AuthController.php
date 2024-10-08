<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Halaman Login
    public function login() {
        return view('auth.login');
    }

    // Proses Login
    public function prosesLogin() {
        
    }

    // Halaman Registrasi
    public function registrasi() {
        return view('auth.signUp');
    } 

    // Proses Registrasi
    public function prosesRegistrasi() {
        
    }

    // proses Logout
    public function logout() {
        
    }
}
