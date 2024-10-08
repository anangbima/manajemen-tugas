<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Akses halaman dashboard admin
    public function index () {
        return view('admin.index');
    }
}
