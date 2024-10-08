<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Halaman Login
    public function login() {
        return view('auth.login');
    }

    // Proses Login
    public function prosesLogin(Request $request) {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            if ($user['role'] == 'admin') {
                return redirect('admin');
            }
        }

        return redirect('login');
    }

    // Halaman Registrasi
    public function registrasi() {
        return view('auth.signUp');
    } 

    // Proses Registrasi
    public function prosesRegistrasi() {
        
    }

    // proses Logout
    public function logout(Request $request) {
        $request->session()->flush();

        Auth::logout();
        return redirect('login');
    }
}
