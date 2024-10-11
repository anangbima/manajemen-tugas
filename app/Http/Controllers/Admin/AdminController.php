<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $user;

    public function __construct(){
        $this->user = Auth::user();
    }

    // Akses halaman dashboard admin
    public function index () {
        return view('admin.index');
    }

    // Akses halaman profile
    // Akses halaman profile
    public function profile () {
        return view('admin.profile');
    }
}
