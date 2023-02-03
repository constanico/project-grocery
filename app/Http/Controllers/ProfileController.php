<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function register() {
        return view('profile.register');
    }

    public function login() {
        return view('profile.login');
    }
}
