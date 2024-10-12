<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrasiRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AuthController extends Controller
{
    // Halaman Login
    public function login() {
        return Inertia::render('Auth/Login');
    }

    // Proses Login
    public function prosesLogin(LoginRequest $request) {
        $request->validated();

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            if ($user['role'] == 'admin') {
                return redirect('admin');
            } 

            if ($user['role'] == 'user') {
                return redirect('projects');
            }
        }

        return redirect('login');
    }

    // Halaman Registrasi
    public function registrasi() {
        return Inertia::render('Auth/Registrasi');
    } 

    // Proses Registrasi
    public function prosesRegistrasi(RegistrasiRequest $request) {
        $data = $request->validated();

        User::create([
            'name'          => $data['name'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'role'          => 'user'
        ]);

        return redirect('login');
    }

    // proses Logout
    public function logout(Request $request) {
        $request->session()->flush();

        Auth::logout();
        return redirect('login');
    }
}
