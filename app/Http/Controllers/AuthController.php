<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Halaman Login
    public function signIn() {
        return view('auth.signIn');
    }

    // Proses Login
    public function prosesSignIn() {
        
    }

    // Halaman Registrasi
    public function signUp() {
        return view('auth.signUp');
    } 

    // Proses Registrasi
    public function prosesSignUp() {
        
    }

    // proses Logout
    public function signOut() {
        
    }
}
