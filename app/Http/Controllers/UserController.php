<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Akses ke halaman project user
    public function projects () {
        $data = [
            'title'     => 'Projects'
        ];

        return view('user.projects.index', $data);
    }
}
