<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AdminController extends Controller
{
    protected $user;

    public function __construct(){
        $this->user = Auth::user();
    }

    // Akses halaman dashboard admin
    public function index () {
        return Inertia::render('Admin/Index');
    }

    // Akses halaman profil
    public function profile () {
        return Inertia::render('Admin/Profile');
    }
}
